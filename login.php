<?php
session_start();
include("conn.php");


if(isset($_POST['save'])){
    $a=$_POST['username'];
    $b=$_POST['password'];
    $sel="SELECT `username`, `password` FROM `user` WHERE `username`='$a' AND `password`='$b'";

    $q=mysqli_query($conn,$sel);

    while($row=mysqli_fetch_array($q)){
        if($row){
            $_SESSION['username']=$row['username'];
            $_SESSION['password']=$row['password'];
           //echo 'successfully';
           header("location:index.php");
        }
           else{
            echo "invalid input";
           }
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
                <input type="text" name="username" placeholder="please enter your names"><br><br>
                <input type="password" name="password" placeholder="please enter your password"><br><br>
                <button name="save">LOGIN</button><br><br>
                if you don't have ones: <a href="user_insert.php">create new</a>
            </center>
        </fieldset>
    </form>
</body>
</html>