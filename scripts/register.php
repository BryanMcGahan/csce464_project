<?php
session_start();
include('connectToDatabase.php');
$query = "INSERT INTO Customers (email, firstname, lastname, phone, address) VALUES ('$_POST[email]','$_POST[firstname]','$_POST[lastname]','$_POST[phone]','$_POST[address]');";
$result = mysqli_query($db, $query);
echo $result;
mysqli_close($db);
