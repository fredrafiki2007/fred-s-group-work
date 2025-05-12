<?php
include("conn.php");
if(isset($_GET['upd'])){
    $upd=$_GET['upd'];
$sel="SELECT * FROM `trade` WHERE tradeid='$upd'";
$q=mysqli_query($conn,$sel);
$fetch=mysqli_fetch_array($q);

if(isset($_POST['update'])){

    $a=$_POST['tname'];

    $update="UPDATE `trade` SET `tradename`='$a' WHERE `tradeid`='$upd'";

    $q=mysqli_query($conn,$update);

    if($q){
        //echo 'updated';
        header("location:trade_select.php");
    }
    else{
        echo 'not';
    }

}

}

    ?>

<form action="" method="POST">

<fieldset>

<center>

<input type="text" name="tname" value="<?php echo $fetch['tradename'];?>" placeholder="please enter your trade names" required=""><br><br>
<button name="update">UPDATE</button>
</center>
</fieldset>
</form>