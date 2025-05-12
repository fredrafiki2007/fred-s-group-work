<?php
include("conn.php");
if(isset($_POST['insert'])){
    $b=$_POST['firstname'];
    $c=$_POST['lastname'];
    $d=$_POST['gender'];
    $a=$_POST['tradeid'];
    $insert="INSERT INTO `trainee`(`firstname`, `lastname`, `gender`, `tradeid`) VALUES ('$b','$c','$d','$a')";
    $q=mysqli_query($conn,$insert);
    if($q){
        //echo 'inserted';

        header("location:trainee_select.php");
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
                <input type="text" name="tradeid" placeholder="please enter the id" required=""><br><br>
                <input type="text" name="firstname" placeholder="please enter the firstname" required=""><br><br>
                <input type="text" name="lastname" placeholder="please enter the lastname" required=""><br><br>
                <input type="text" name="gender" placeholder="please enter the gender" required=""><br><br>
                <button name="insert">OK</button> <button><a href="trainee_select.php">VIEW INSERTED DATA</a></button> 
            </center>
        </fieldset>
    </form>
</body>
</html>