<?php

$link = mysqli_connect("localhost",
    "root",
    "rts",
    "info_students");

$query = "select * from users ";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

print_r($row);
?>

<a href="list.php">Go to Home</a><table border="1" width="70%">
    <tr>
        <td>ID</td>
        <td>FirstName</td>
        <td>LastName</td>
        <td>PhoneNumber</td>
        <td>Action</td>
    </tr>
    <?php
    foreach($result as $row){
       print_r($row) ?>

        <tr>
            <td><?php echo $row['ID']?></td>
            <td><?php echo $row['FirstName']?></td>
            <td><?php echo $row['LastName']?></td>
            <td><?php echo $row['PhoneNumber']?></td>
            <td> <a href="#">Edit</a> | <a href="delete.php">Delete</a> </td>
        </tr>

    <?php
    }
    ?>


</table>


