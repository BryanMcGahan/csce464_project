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
function sendMessage(event){
  event.preventDefault();
  request = new XMLHttpRequest();
  let message = document.getElementById('message').value;
  request.open("GET", "scripts/counter.php?message=" + message, false );
  request.onreadystatechange = handleResponse;
  request.send(null);
}

function handleResponse(){
  if(request.readyState == 4){
    console.log(request);
  }
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
    let split_message = request.responseText.split(',');
    document.getElementById('message_count').innerHTML = split_message[0].trim();
    document.getElementById('last_message').innerHTML = split_message[1].trim();
  }
}

</script>
</head>
  <main>
    <div>
      <form onsubmit="sendMessage(event)">
        <input type="text" name="" id="message"> 
        <button type="submit" id="submit_btn" >Send Message</button>
      </form>
      <div id="message_block">
        <p id="response">Total Messages Sent:<span id="message_count"></span></p>
        <p>Last Message: <span id="last_message"></span></p>
      </div>
    </div>
    <script>
    getMessage(); 
    setInterval('getMessage()', 100); 
    </script>
  </main>
</html>



