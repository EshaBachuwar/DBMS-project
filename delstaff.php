<?php
include('conn.php');
session_start();
$staffid=$_POST['staffid'];
$sql="DELETE FROM staff WHERE staff_id='$staffid'";
$res=mysqli_query($conn,$sql);
if($res){
    header('location:/project/warden2.php');
}
else{
    header('location:/project/delstaff.html');
}
?>