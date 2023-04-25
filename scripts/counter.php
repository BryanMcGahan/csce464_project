<?php
session_start();
if (!isset($_SESSION['counter']))
$_SESSION['counter'] = 0; 
if(!empty($_GET['message'])){
  $_SESSION['counter'] = $_SESSION['counter'] + 1;

  $file = fopen("/Applications/XAMPP/xamppfiles/htdocs/mastery/scripts/messages.txt", "w") or die("Could not open file");
  fwrite($file, $_GET['message']) or die("Could not write file");
  fclose($file);
}


  try{
    $file = "messages.txt";
    $lines = file($file);
    $last_line = trim(end($lines));
    echo "$_SESSION[counter], $last_line"; 
  }catch(Exception $e){
    echo "Error:" .$e->getMessage();
  }
?>
