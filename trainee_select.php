<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button><a href="trainee_insert.php">ADD NEW RECORDS</a></button> <button><a href="index.php">HOME</a></button>
    <table border="6">
        <th>TRAINEE ID</th>
        <th>FIRST NAME</th>
        <th>LAST NAME</th>
        <th>GENDER</th>
        <th colspan="2">ACTIONS</th>

        <?php
include("conn.php");
$sel="SELECT* FROM trainee";

$q=mysqli_query($conn,$sel);

while($fetch=mysqli_fetch_array($q)){
    ?>
    <tr>
        <td><?php echo $fetch['tradeid'];?></td>
        <td><?php echo $fetch['firstname'];?></td>
        <td><?php echo $fetch['lastname'];?></td>
        <td><?php echo $fetch['gender'];?></td>
        <td><button><a href="trainee_update.php?upd=<?php echo $fetch['tradeid'];?>">UPDATE</a></button></td>
        <td><button><a href="trainee_delete.php?del=<?php echo $fetch['tradeid'];?>">DELETE</a></button></td>
    </tr>
    <?php
}


        ?>
    </table>
</body>
</html>