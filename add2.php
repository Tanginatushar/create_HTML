<?php
print_r($_REQUEST);
$ID=$_POST['ID'];
$firstName = $_POST['FirstName'];
$lastName  = $_POST['LastName'];
$PhoneNumber=$_POST['PhoneNumber'];

$link = mysqli_connect("localhost",
    "root",
    "rts",
    "info_students");

$query = "INSERT INTO `info_students`.`users` (
`ID`,
`FirstName` ,
`LastName`,
`PhoneNumber`
)
VALUES (
    '$ID','$firstName', '$lastName', '$PhoneNumber'
)";

mysqli_query($link, $query);
header('location:list.php');
?>