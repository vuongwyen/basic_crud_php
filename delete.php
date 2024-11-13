<?php
include 'connect.php';
if(!$con){
    die(mysqli_errno($con));
}
if(isset($_GET['deletestt'])){
    $stt=$_GET['deletestt'];
    $sql="DELETE FROM diem WHERE stt='$stt'";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "Record deleted successfully";
    }else{
        die(mysqli_errno($con));
    }
}
?>