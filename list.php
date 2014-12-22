<?php
$ID = $_GET['ID'];

$link = mysqli_connect("localhost",
    "root",
    "rts",
    "info_students");

$query = "select * from users WHERE ID= $ID";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

print_r($row);
?>

<a href="list.php">Go to Home</a><table border="1" width="70%">
    <tr>
        <td>ID</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Phone Number</td>
        <td>Action</td>
    </tr>
    <?php
    foreach($result as $row){
        ?>

        <tr>
            <td><?php echo $row['ID']?></td>
            <td><?php echo $row['FirstName']?></td>
            <td><?php echo $row['LastName']?></td>
            <td><?php echo $row['PhoneNumber']?></td>
            <td> <a href="#">Edit</a> | <a href="delete.php?ID=<?php echo $row['ID']?>">Delete</a> | <a href="softdelete.php?ID=<?php echo $row['ID']?>">Soft Delete</a></td>
        </tr>

    <?php
    }
    ?>

</table>


