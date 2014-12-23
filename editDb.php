<?php
$ID = $_GET['ID'];

$link = mysqli_connect("localhost",
    "root",
    "rts",
    "info_students");

$query = "UPDATE `info_students`.`users` SET LastName='Shultana'  WHERE `ID` =$ID";

$result=mysqli_query($link, $query);


header('location:list.php');
?>