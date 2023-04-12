<?php
session_start();
?>
<?php include '../common/document_head.html'?>
<?php include '../common/navbar.html'?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="styles/messages_page.css">
    <script type="text/javascript">

let request = null;
function sendMessage(){
  request = new XMLHttpRequest();
  let message = document.getElementById('message').value;
  request.open("GET", "scripts/counter.php?message=" + message, false );
  request.onreadystatechange = handleResponse;
  request.send(null);
}

function handleResponse(){
  console.log("Message Received");
}


function getMessage(){
  request = new XMLHttpRequest();
  let url = "scripts/counter.php";
  request.open("GET", url, true);
  request.onreadystatechange = updatePage;
  request.send(null);
}

function updatePage(){
  if (request.readyState == 4){
    document.getElementById('message_count').innerHTML = request.responseText;
  }
}

</script>
</head>
  <main>
    <div>
      <form onsubmit="sendMessage()">
        <input type="text" name="" id="message"> 
        <button type="submit" id="submit_btn" >Send Message</button>
      </form>
      <div>
        <p id="response">Total Messages Sent:<span id="message_count"></span></p>
      </div>
    </div>
    <script>
    getMessage(); 
    setInterval('getMessage()', 100); 
    </script>
  </main>
</html>



