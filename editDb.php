<?php
$ID = $_GET['ID'];

$link = mysqli_connect("localhost",
    "root",
    "rts",
    "info_students");

$query = "UPDATE `info_students` SET LastName='Shultana'  WHERE `ID` =3";

mysqli_query($link, $query);

header('location:list.php');
?>