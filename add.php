<?php
print_r($_REQUEST);

$link =mysqli_connect("localhost","root","lict@2","students") ;
$query ="INSERT INTO `students`.`users` (
`first_name` ,
`last_name`
)

VALUES(
'".$_POST['firstName']."', '".$_POST['LastName']."'
                                        );";
echo $query;

mysqli_query($link,$query);
