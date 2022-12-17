<?php
include('conn.php');
session_start();
$roll=$_POST['rollnum'];
$complaint=$_POST['des'];
$sql="INSERT INTO complaints VALUES('$roll','$complaint',now())";

$res=mysqli_query($conn,$sql);
if($res){
    //alert message

    echo "<script type='text/javascript'>alert('Complaint filed successfully');
    ;
    </script>";
    header('location:/project/home.html');


}
else{
    echo "<script type='text/javascript'>alert('Complaint filed successfully');
    ;
    </script>";

}
?>