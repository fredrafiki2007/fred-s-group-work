
<!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <h1><u><i>.TABLE OF COMPETENT TRAINEES:</i></u></h1>
   </head>
   <body>
    <table border="6">
        <tr>
            <th>FIRSTNAME</th>
            <th>LASTNAME</th>
            <th>TRADENAME</th>
            <th>TOTALMARKS</th>
        </tr>
        <?php
include("conn.php");
$select= "
SELECT firstname, lastname, tradename, totalmarks_100
FROM trainee
JOIN marks ON trainee.traineeid = marks.traineeid
JOIN trade ON trainee.tradeid = trade.tradeid
WHERE marks.totalmarks_100 >= 70";

$result=mysqli_query($conn,$select);
    while ($row =mysqli_fetch_array($result)) {
        ?>
        <tr>
        <td><?php echo $row['firstname'];?></td>
        <td><?php echo $row['lastname'];?></td>
        <td><?php echo $row['tradename'];?></td>
        <td><?php echo $row['totalmarks_100'];?></td>
    </tr>
        <?php
    }
   ?>

    </table>
   </body>
   </html><br><br>

<!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <h1><u><i>>TABLE OF NOT YET COMPETENT(NYC) TRAINEES:</i></u></h1>
   </head>
   <body>
    <table border="6">
        <tr>
            <th>FIRSTNAME</th>
            <th>LASTNAME</th>
            <th>TRADENAME</th>
            <th>TOTALMARKS</th>
        </tr>
        <?php
include("conn.php");
$select= "
SELECT firstname, lastname, tradename, totalmarks_100
FROM trainee
JOIN marks ON trainee.traineeid = marks.traineeid
JOIN trade ON trainee.tradeid = trade.tradeid
WHERE marks.totalmarks_100 < 70";

$result=mysqli_query($conn,$select);
    while ($row =mysqli_fetch_array($result)) {
        ?>
        <tr>
        <td><?php echo $row['firstname'];?></td>
        <td><?php echo $row['lastname'];?></td>
        <td><?php echo $row['tradename'];?></td>
        <td><?php echo $row['totalmarks_100'];?></td>

    </tr>
   
        <?php
    }
   ?>

    </table>
   </body>
   </html>
