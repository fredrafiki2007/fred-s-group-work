<?php
include("conn.php");
if(isset($_POST['save'])){

    $a=$_POST['tname'];
    $insert="INSERT INTO `trade`(`tradename`) VALUES ('$a')";

    $q=mysqli_query($conn,$insert);

    if($q){
       //echo 'inserted';
        header("location:trade_select.php");
    }
    else{
        echo 'not';
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">

    <fieldset>

    <center>

    <input type="text" name="tname" placeholder="please enter your trade names" required=""><br><br>
    <button name="save">OK</button> <button><a href="trade_select.php">VIEW INSERTED DATA</a></button>
    </center>
    </fieldset>
    </form>
</body>
</html>