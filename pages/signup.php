<?php include '../common/document_head.html' ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles/signup.css">
        <script>
            function validate(){
                let email = document.getElementById("email_input").value;
                console.log(email);
            }
        </script>
    </head>
    <main>
        <div class="container">
            <p id="page_title">Sign Up</p>
            <form onsubmit="validate()" action="scripts/register.php"  method="post">
                <div class="form-row">
                    <div class="form-item">
                        <label for=""><p>First Name:</p></label>
                        <input name="firstname" type="text" autocomplete="off" required>
                    </div>
                    <div class="form-item">
                        <label for=""><p>Last Name:</p></label>
                        <input name="lastname" type="text" autocomplete="off" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-item">
                        <label for=""><p>Username:</p></label>
                        <input name="username" type="text" autocomplete="off" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-item">
                        <label for=""><p>Email:</p></label>
                        <input name="email" type="text" id="email_input" autocomplete="off" required>
                    </div>
                    <div class="form-item">
                        <label for=""><p>Password:</p></label>
                        <input name="password" type="password" autocomplete="off" required>
                    </div>
                </div>
                <div class="form-row" id="button_row">
                <div class="form-item">
                        <button id="form_btn" type="submit" >
                            <p>Sign Up</p>
                        </button>
                </div>
                </div>
            </form>
        </div>
    </main>
</html>
