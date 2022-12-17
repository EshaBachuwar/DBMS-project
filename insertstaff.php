<?php
include('conn.php');
session_start();
$name=$_POST['na'];
$staffid=$_POST['staffid'];
$phone=$_POST['phone'];
$worktype=$_POST['worktype'];
$sql="INSERT INTO staff VALUES ('$name','$phone','$staffid','$worktype')";

$res=mysqli_query($conn,$sql);
if($res){
    header('location:/project/warden2.php');
}
else{
    header('location:/project/upstaff.html');

}
?>