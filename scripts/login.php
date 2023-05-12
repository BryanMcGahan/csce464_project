<?php
session_start();

include('connectToDatabase.php');

$email = $_POST['email'];
$password = $_POST['password'];

$login = mysqli_prepare($db, "SELECT username FROM Users WHERE email = ? AND password = ?");
mysqli_stmt_bind_param($login, "ss", $email, $password);
mysqli_stmt_execute($login);
mysqli_stmt_bind_result($login, $user_exists);
mysqli_stmt_fetch($login);


if($user_exists){
    echo $user_exists;
}else{
    echo "null";
}
 
?>
