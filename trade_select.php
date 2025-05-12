<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button><a href="trade_insert.php">ADD NEW RECORDS</a></button> <button><a href="index.php">HOME</a></button>
    <table border="6">
        <th>TRADE ID</th>
        <th>TRADE NAME</th>
        <th colspan="2">ACTIONS</th>
        <?php
include("conn.php");
$sel="SELECT * FROM `trade`";
$q=mysqli_query($conn,$sel);
while($fetch=mysqli_fetch_array(($q))){
    ?>
    <tr>
    <td><?php echo $fetch['tradeid'];?></td>
    <td><?php echo $fetch['tradename'];?></td>
    <td><button><a href="trade_update.php?upd=<?php echo $fetch['tradeid'];?>">UPDATE</a></button></td>
    <td><button><a href="trade_delete.php?del=<?php echo $fetch['tradeid'];?>">DELETEE</a></button></td>
    </tr>
    <?php
}
?>
    </table>
</body>
</html>