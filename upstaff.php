<?php
include('conn.php');
session_start();
$name=$_POST['na'];
$staffid=$_POST['staffid'];
$phone=$_POST['phone'];
$worktype=$_POST['worktype'];
$sql="UPDATE staff SET staff_name='$name',staff_phone ='$phone', staff_id='$staffid' ,work_type='$worktype' WHERE staff_id='$staffid' ";

$res=mysqli_query($conn,$sql);
if($res){
    header('location:/project/warden2.php');
}
else{
    header('location:/project/insertstaff.html');

}
?>