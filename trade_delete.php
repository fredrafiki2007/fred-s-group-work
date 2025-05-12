<?php
include("conn.php");
if(isset($_GET['del'])){
$del=$_GET['del'];
$delete="DELETE FROM `trade` WHERE tradeid='$del'";
$q=mysqli_query($conn,$delete);
if($q)
{
    //echo 'deleted';
    header("location:trade_select.php");
}
else{
    echo 'not';
}
}
?>