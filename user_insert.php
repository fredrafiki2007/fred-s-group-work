<?php
include("conn.php");
if(isset($_POST['save'])){
    $a=$_POST['username'];
    $b=$_POST['password'];
    $insert="INSERT INTO `user`(`username`, `password`) VALUES ('$a','$b')";
    $q=mysqli_query($conn,$insert);
    if($q){
       $a="the account created successfully";
       echo "<script>alert('$a');</script>";
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
    <form action="" method="post">
        <fieldset>
            <center>
                <input type="text" name="username" placeholder="please enter your names"><br><br>
                <input type="password" name="password" placeholder="please enter your password"><br><br>
                <button name="save">OK</button> <button><a href="login.php">BACK</a></button>
            </center>
        </fieldset>
    </form>
</body>
</html>