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

    $sql='UPDATE student SET student_name="'.$name.'",student_email="'.$email.'",roll_number="'.$roll.'",student_phone="'.$phone.'",student_password="'.$pass.'",discipline="'.$discipline.'",batch="'.$batch.'",room_number="'.$room.'" WHERE roll_number="'.$roll.'" ';
    $re=mysqli_query($conn,$sql);
    if($re){
        header('location:/project/warden2.php');
    }
    else{
        header('location:/project/updatestu.html');
    }


?>