<?php
include('conn.php');
session_start();
$userid=$_POST['username'];
$password=$_POST['password'];

$sql="select * from warden_login where warden_email='$userid' and warden_password='$password' ";
$res=mysqli_query($conn,$sql);
if($result=mysqli_fetch_assoc($res))
{
$_SESSION['userid']=$result['userid'];
header('location:warden2.php');
}
else
{
header('location:login2.html');
}
?>