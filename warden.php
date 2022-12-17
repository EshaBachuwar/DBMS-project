<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            width:100vw;
            height:600px;
            margin:0px;
        }
        .h1 {
            margin: 0px;
            font-size: 30px;
            text-align: center;
        }

        #head1 {
            height: 50px;
            color: rgb(255, 255, 255);
            width: 100%;
            position: absolute;
            top: 0%;
            background-color: black;
            /* filter: opacity(0.5); */
            display: flex;
            justify-content: center;
            align-items: center;
            /* position: fixed;
            top: 0px; */
        }
        .main{
            display:flex;
            margin-top:70px;
            height:70%;

        }
        .left{
            width:30%;
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
        }
        .wimg img{
            width:200px;
            border-radius:50px;

        }
        .left_top{
            margin-left:10px;
        }
        .left_bottom{
            display:flex;

        }
        a{
            text-decoration:none;
            color:black;
        }
        .stu{
            display:flex;
            flex-direction:column;

        }
        .staff{
            display:flex;
            flex-direction:column;
        }
        .box{
            border:2px solid black;
            border-radius:5px;
            margin:10px;
            padding:5px;
        }
        /* #top{
            display:flex;
            justify-content:space-between;
        } */
        /* .i {
            position: absolute;
            top:50px;
        }
        .i1 {
            position: absolute;
            top:10px;
        }
        #item2{
            position: relative;
            top:200px;
        }
        .box2{
            position: relative;
            top:100px;
        }
        .item{
            height:100%;
        } */
        .right{
            width:70%;
        }
        /* .i{
            position: absolute;
            top:150px;
        } */
        
        #top{
            display:flex;
            height:400px;
            flex-direction:column;
            justify-content:space-around;
        }
        /* #item {
            position:relative;
            bottom:10px;
        } */
        /* #t1{
            position: absolute;
            top:40px;
        }
        #t2{
            position: absolute;
            top:100px;
        } */
    </style>
</head>
<body>

   
    <div id="head1">
        <div class="h1">Maa Saraswati Girls Hostel</div>

    </div>
    <div class="main">
        <div class="left">
            <div class="left_top">
                <div class="wimg">
                    <img src="https://i.pinimg.com/736x/5a/ba/d3/5abad38b62aae23e8e5bc54351d7e816.jpg" alt="">
                </div>
                <div class="info">
                    <?php
                    include('conn.php');
                    $sql="select warden_name, warden_email,fid,warden_phone from warden";
                    $res=mysqli_query($conn,$sql);
                    while($result=mysqli_fetch_assoc($res)){
                    echo "Name: ".$result['warden_name']. '<br>'; 
                    echo "E-mail: ".$result['warden_email']. '<br>';
                    echo "FId: ".$result['fid']. '<br>';
                    echo "Phone Number: ".$result['warden_phone']. '<br>';
                    }
                    ?>
                </div>
            </div>
            <div class="left_bottom">
                <div class="stu">
                    <div class="box"> <a href="">Add New Student</a> </div>
                    <div class="box"> <a href="updatestu.html">Update Student</a> </div>
                    <div class="box"><a href="deletestu.html">Delete Student</a></div>
                   
                                  
                     
                </div>
                <div class="staff">
                <div class="box"> <a href="">Add New Staff</a> </div>
                    <div class="box"> <a href="">Update Staff</a> </div>
                    <div class="box"><a href="">Delete Staff</a></div>
                    
                </div>
            </div>
        </div>
        <div class="right">
                    <div id="top">
                        <div class="item">
                            <h1>Student Details</h1>
                            
                            <?php 
                            echo '<div class="i">';
                            include('conn.php');
                            $sql="select * from student";
                            $res=mysqli_query($conn,$sql);
                            echo '<table id="t1" cellpadding=5 border=2> <tr> <td>Name of student </td><td>Roll number of student </td><td>Student E-mail </td> <td>Student Phone Number </td> <td>Student Discipline </td> <td>Student Batch </td> <td>Student Room number </td></tr>';
                            while($result=mysqli_fetch_assoc($res))
                            {
                            echo '<tr><td>'. $result['student_name'] . '</td><td>'. $result['roll_number'] . '</td><td>'.$result['student_email'].'</td><td>'.$result['student_phone'].'</td><td>'.$result['discipline'].'</td><td>'.$result['batch'].'</td><td>'.$result['room_number'].'</td></tr>';
                            }
                            echo '</table>';
                            echo'</div>';
                            ?>
                            
                        </div>
                        <div  id="item2">
                            <h1>Staff Details</h1>
                            <div class="i1">
                            <?php 
                            echo '<div class="box2">';
                            include('conn.php');
                            $sql2="select staff_name,staff_phone,staff_id,work_type from staff";
                            $res2=mysqli_query($conn,$sql2);
                            echo '<table id="t2" cellpadding=5 border=2> <tr> <td>Name of staff </td><td>ID of staff </td><td> Staff Phone Number</td><td>Worktype</td> </tr>';
                            while($result1=mysqli_fetch_assoc($res2))
                            {
                            echo '<tr><td>'. $result1['staff_name'] . '</td><td>'.$result1['staff_id'] . '</td>.<td>'. $result1['staff_phone']. '</td><td>' .$result1['work_type'];
                            
                            }
                            echo '</table>';
                            echo '</div>';
                            ?>
                            </div>
                            
                        </div>
                    </div>
        </div>
    </div>
</body>
</html>