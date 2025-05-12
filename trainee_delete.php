<?php
include("conn.php");
if(isset($_GET['del'])){
    $del=$_GET['del'];
    $delete="DELETE FROM `trainee` WHERE tradeid='$del'";
    $q=mysqli_query($conn,$delete);
    if($q){
        header("location:trainee_select.php");
    }
    else{
        echo 'not';
    }
}
?>