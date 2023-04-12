<?php
session_start();
if (!isset($_SESSION['counter']))
$_SESSION['counter'] = 0; 
if(!empty($_GET['message'])){
  $_SESSION['counter'] = $_SESSION['counter'] + 1;
}
echo "<span>$_SESSION[counter]</span>"; 
?>
