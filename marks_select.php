<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button><a href="marks_insert.php">ADD NEW DATA</a></button> <button><a href="index.php">HOME</a></button>
    <table border="6">
        <th>TRAINEEID</th>
        <th>TRADEID</th>
        <th>MODULENAME</th>
        <th>FORMATIVE ASSESSMENT</th>
        <th>SUMMATIVE ASSESSMENT</th>
        <th>TOTAL MARKS</th>
        <th colspan="2">ACTIONS</th>

        <?php
        include("conn.php");
        $sel="SELECT* FROM marks";

        $q=mysqli_query($conn,$sel);
        while($row=mysqli_fetch_array($q)){
            ?>
            <tr>
                <td><?php echo $row['traineeid'];?></td>
                <td><?php echo $row['tradeid'];?></td>
                <td><?php echo $row['modulename'];?></td>
                <td><?php echo $row['formativeAss_50'];?></td>
                <td><?php echo $row['summativeAss_50'];?></td>
                <td><?php echo $row['totalmarks_100'];?></td>
                <td><button><a href="marks_update.php?upd=<?php echo $row['traineeid'];?>">UPDATE</a></button></td>
                <td><button><a href="marks_delete.php?del=<?php echo $row['traineeid'];?>">DELETE</a></button></td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>