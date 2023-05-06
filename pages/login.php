<?php
session_start();
include("../common/document_head.html");
?>

<script>
var http = new XMLHttpRequest();
function tryLogin(){
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;
    var formdata = new FormData();
    formdata.append('email', email);
    formdata.append('password', password);
    http.open('POST', 'scripts/login.php', false);
    http.onreadystatechange = checkUser;
    http.send(formdata);
}

function checkUser(){
    event.preventDefault();
    if(http.readyState == 4){
        let response = http.response;
        if(response !== 'null') {
            window.sessionStorage.setItem("username", response);
            window.location.replace('index.html');
        }else{
            document.getElementById('invalidLoginMessage').innerText = "Login Invalid, try again or sign up if you don't have an account yet!";
        } 
    } 
}

</script>
<main>
    <div class="card">
        <p id="page_title">Login</p>
        <form onsubmit="tryLogin()">
            <div class="inputGroup">
                <label class="formLabel">Email: </label>
                <input class="formInput" type="email" id="email"/>
            </div>
            <div class="inputGroup">
                <label class="formLabel">Password: </label>
                <input class="formInput" type="password" id="password"/>
            </div>
            <div>
            </div>
            <p id="invalidLoginMessage"></p>
            <div class="btnGroup">
                <button id="loginBtn" type="submit">Login</button>
                <a id="signonBtn" href="pages/signup.php">Sign Up!</a>
            </div>
        </form>
    </div>
</main>

<style>

#page_title {
    font-size: 24px;
    font-weight: 700;
    color: #512da8;
}

main {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content:center;
    height: 90vh;
}

form {
    width: auto;
    max-width: 50%;
}

#invalidLoginMessage {
    margin-bottom: 1rem;
    color: red;
    font-size: 12px;
    font-weight: 500;
}


#loginBtn {
    border: 1px solid #512da8;
}


#signonBtn {
    margin-right: .5rem;
    padding: .5rem 1rem;
    border-radius: 10rem;
    background-color: #512da8; 
    color: white;
    font-size: 12px;
}

.btnGroup {
    display: flex;
    flex-direction: row;
    align-items: center;
}

button {
    margin-right: .5rem;
    padding: .5rem 1rem;
    border-radius: 10rem;
    font-size: 12px;
}

input {
    height: 1.5rem;
    border-radius: .5rem;
    border: solid .5px #512da8;
}
.card {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-evenly;
    border: solid .5px #512da8;
    width: 35vw;
    height: 35vh;
    padding: 2rem 2rem;
    border-radius: 1rem;
    box-shadow: 1px 2px 4px;
}

.formLabel{
    font-size: 14px;
    font-weight: 600;
}

.inputGroup{
    display: flex;
    flex-direction: column;
    align-items: start;
    margin-bottom: 1rem;
}
</style>
