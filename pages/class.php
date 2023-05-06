<?php 
session_start();
include('../common/document_head.html');
include('../scripts/connectToDatabase.php');
$class_id = $_GET['Id'];

$select = mysqli_prepare($db, "SELECT Classes.Name, Classes.Description, ClassInfo.AuthorFirstname, ClassInfo.AuthorLastname, ClassInfo.StartDate, ClassInfo.EndDate FROM Classes LEFT JOIN ClassInfo on ClassInfo.ClassId = Classes.Id WHERE Classes.Id = ?");
mysqli_stmt_bind_param($select, "s", $class_id);
mysqli_stmt_execute($select);
mysqli_stmt_bind_result($select, $name,$description, $firstname, $lastname, $start, $end);

while (mysqli_stmt_fetch($select)) {
  echo $name." ".$firstname." ".$lastname." ".$start;
}

?>
