<?php
include('conn.php');
session_start();
$name=$_POST['na'];
$email=$_POST['email'];
$roll=$_POST['rollnum'];
$phone=$_POST['phone'];
$discipline=$_POST['discipline'];
$pass=$_POST['password'];
$batch=$_POST['batch'];
$room=$_POST['room'];
$sql='INSERT INTO student VALUES ("'.$name.'","'.$email.'","'.$roll.'","'.$phone.'","'.$pass.'","'.$discipline.'","'.$batch.'","'.$room.'")';

$res=mysqli_query($conn,$sql);
if($res){
    header('location:/project/warden2.php');
}
else{
    header('location:/project/insertstu.html');

}
?>