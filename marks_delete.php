<?php
include("conn.php");
if(isset($_GET['del'])){
    $del=$_GET['del'];
    $delete="DELETE FROM `marks` WHERE traineeid='$del'";
    $q=mysqli_query($conn,$delete);
    if($q){
        header("location:marks_select.php");
    }
    else{
        echo 'not';
    }
}
?>