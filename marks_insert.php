<?php
include("conn.php");
if(isset($_POST['insert'])){
    $a=$_POST['traineeid'];
    $b=$_POST['tradeid'];
    $c=$_POST['modulename'];
    $d=$_POST['formAss'];
    $e=$_POST['sumAss'];
    $f=$_POST['total'];
    if($f>0 && $f<=100 && $d>0 && $d<=50 && $e>0 && $e<=50){
    $insert="INSERT INTO `marks`(`traineeid`, `tradeid`, `modulename`, `formativeAss_50`, `summativeAss_50`, `totalmarks_100`) VALUES ('$a','$b','$c','$d','$e','$f')";

    $q=mysqli_query($conn,$insert);

    if($q){
        header("location:marks_select.php");
    }
    }
    else{
        echo 'the marks are greater or less than the needs one!!!!!';
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
            <input type="text" name="tradeid" placeholder="please enter the traineeid" required=""><br><br>
            <input type="text" name="traineeid" placeholder="please enter the tradeid" required=""><br><br>
            <input type="text" name="modulename" placeholder="please enter the modulename" required=""><br><br>
            <input type="text" name="formAss" oninput="calculateTotal()"  placeholder="please enter the formAss" required=""><br><br>
            <input type="text" name="sumAss" oninput="calculateTotal()"  placeholder="please enter the sumAss" required=""><br><br>
            <input type="text" name="total"  placeholder="please enter the total" required=""  readonly><br><br>
            <button name="insert">OK</button> <button><a href="marks_select.php">VIEW INSERTED DATA</a></button>
            </center>
        </fieldset>
    </form>
</body>
</html>