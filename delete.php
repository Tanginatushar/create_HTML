<?php
$ID = $_GET['ID'];

$link = mysqli_connect("localhost",
"root",
"rts",
"info_students");

$query = "DELETE FROM `info_students`.`users` WHERE `users`.`ID` = $ID";

mysqli_query($link, $query);

header('location:list.php');
?>