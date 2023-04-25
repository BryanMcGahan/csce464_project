<?php
$db = mysqli_connect("127.0.0.1", "root", "", "MasterIt");
if(mysqli_connect_errno() || ($db == null)){
    echo "unable to connect".mysqli_error();
    exit;
}
echo 'nice boooiii';
?>
