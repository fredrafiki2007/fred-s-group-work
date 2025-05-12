<?php
include("conn.php");
if(isset($_GET['upd'])){
$upd=$_GET['upd'];
$sel="SELECT* FROM trainee WHERE tradeid='$upd'";

$q=mysqli_query($conn,$sel);

$fetch=mysqli_fetch_array($q);

if(isset($_POST['save'])){
    $a=$_POST['firstname'];
    $b=$_POST['lastname'];
    $c=$_POST['gender'];
    $d=$_POST['tradeid'];
    $upd="UPDATE `trainee` SET `firstname`='$a',`lastname`='$b',`gender`='$c' WHERE `tradeid`='$upd'";
    $q=mysqli_query($conn,$upd);
    if($q){
        //echo 'updated';
        header("location:trainee_select.php");
    }
    else{
        echo 'not';
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
                <input type="text" name="tradeid" value="<?php echo $fetch['tradeid'];?>" placeholder="please enter the id" required=""><br><br>
                <input type="text" name="firstname" value="<?php echo $fetch['firstname'];?>" placeholder="please enter the firstname" required=""><br><br>
                <input type="text" name="lastname" value="<?php echo $fetch['lastname'];?>" placeholder="please enter the lastname" required=""><br><br>
                <input type="text" name="gender" value="<?php echo $fetch['gender'];?>" placeholder="please enter the gender" required=""><br><br>
                <button name="save">UPDATE</button>
            </center>
        </fieldset>
    </form>
</body>
</html>