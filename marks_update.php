<?php
include("conn.php");
if(isset($_GET['upd'])){
    $upd=$_GET['upd'];
    $sel="SELECT* FROM marks";

        $q=mysqli_query($conn,$sel);
        $row=mysqli_fetch_array($q);
        if(isset($_POST['update'])){
            $a=$_POST['tradeid'];
            $b=$_POST['traineeid'];
            $c=$_POST['modulename'];
            $d=$_POST['formAss'];
            $e=$_POST['sumAss'];
            $f=$_POST['total'];
            if($f>0 && $f<=100 && $d>0 && $d<=50 && $e>0 && $e<=50){
            $update="UPDATE `marks` SET `modulename`='$c',`formativeAss_50`='$d',`summativeAss_50`='$e',`totalmarks_100`='$f' WHERE `traineeid`='$upd'";
            $q=mysqli_query($conn,$update);
            if($q){
                header("location:marks_select.php");
            }
        }
            else{
                echo 'the marks are greater or less than the needs one!!!!!';
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

<script>
    function calculateTotal(){
        const formative=parseFloat(document.getElementsByName('formAss')[0].value);
        const summative=parseFloat(document.getElementsByName('sumAss')[0].value);
        const total=formative + summative;
        document.getElementsByName('total')[0].value=total.toFixed(0);
    }
</script>
    <form action="" method="post">
        <fieldset>
            <center>
            <input type="text" name="tradeid" value="<?php echo $row['tradeid'];?>" placeholder="please enter the tradeid" required=""><br><br>
            <input type="text" name="traineeid" value="<?php echo $row['traineeid'];?>" placeholder="please enter the traineeid" required=""><br><br>
            <input type="text" name="modulename" value="<?php echo $row['modulename'];?>" placeholder="please enter the modulename" required=""><br><br>
            <input type="text" name="formAss" value="<?php echo $row['formativeAss_50'];?>" oninput="calculateTotal()"  placeholder="please enter the formAss" required=""><br><br>
            <input type="text" name="sumAss" value="<?php echo $row['summativeAss_50'];?>" oninput="calculateTotal()"  placeholder="please enter the sumAss" required=""><br><br>
            <input type="text" name="total" value="<?php echo $row['totalmarks_100'];?>" placeholder="please enter the total" required=""  readonly><br><br>
            <button name="update">UPDATE</button>
            </center>
        </fieldset>
    </form>
</body>
</html>