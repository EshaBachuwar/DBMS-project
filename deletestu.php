<?php
include('conn.php');
session_start();
$roll=$_POST['rollnum'];
$sql="DELETE FROM student WHERE roll_number='$roll'";
$res=mysqli_query($conn,$sql);
if($res){
    header('location:/project/warden2.php');
}
else{
    header('location:/project/deletestu.html');
}
?>