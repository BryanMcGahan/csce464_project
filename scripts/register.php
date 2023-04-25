<?php
include('connectToDatabase.php');
$query = "INSERT INTO Customers (email, firstname, lastname, phone, address) VALUES ('bmcgahan55@email.com', 'Bryan', 'McGahan', '234234324', '123 Get Lost Ave, Lincoln NE, 23423');";
$result = mysqli_query($db, $query);
echo $result;
mysqli_close($db);
