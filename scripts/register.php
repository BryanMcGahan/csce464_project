<?php
session_start();
include('../common/document_head.html');
include('connectToDatabase.php');

$username = $_POST['username'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];

$select_query = mysqli_prepare($db, "SELECT email FROM Users WHERE email = ?");
mysqli_stmt_bind_param($select_query,"s", $email);
mysqli_stmt_execute($select_query);
mysqli_stmt_bind_result($select_query, $result_email);
mysqli_stmt_fetch($select_query);


if($result_email){
    echo "<p> Account already exists for email: $result_email</p>";
    mysqli_stmt_free_result($select_query);
}else{
    mysqli_stmt_free_result($select_query);
    $query = mysqli_prepare($db, "INSERT INTO Users (firstname, lastname, username, email, password) VALUES (?,?,?,?,?);");
    mysqli_stmt_bind_param($query,"sssss", $firstname, $lastname, $username, $email, $password);
    $result = mysqli_stmt_execute($query);
    if($result){
        echo "<p> Account created for email: $email</p>";
    }else{
        echo "<p> Error </p>";
    }
}

echo "<a href='pages/login.php'>Login</a>";
mysqli_close($db);
?>


