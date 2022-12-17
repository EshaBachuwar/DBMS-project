<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warden</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Baloo+Paaji+2:wght@400;500&display=swap");
body{
    margin:0px;
}
.container {
  display: grid;
  grid-template-columns: 300px 1100px;
  grid-gap: 50px;
  justify-content: center;
  align-items: center;
  /* height: 100vh; */
  background-color: #f5f5f5;
  font-family: 'Baloo Paaji 2', cursive;
}

.card {
  background-color: #1a202c;
  /* height: 37rem; */
  border-radius: 5px;
  display: flex;
  flex-direction: column;
  align-items: center;
  box-shadow: rgba(0, 0, 0, 0.7);
  color: white;
}

.card__name {
  margin-top: 5px;
  margin-bottom: 5px;
  font-size: 1.2em;
}

.card__image {
  height: 160px;
  width: 160px;
  border-radius: 50%;
  border: 5px solid #272133;
  margin-top: 20px;
  box-shadow: 0 10px 50px rgba(235, 25, 110, 1);
}

.btn {
  background: none;
  border: none;
  cursor: pointer;
  line-height: 1;
  font: 700 1rem 'Roboto Slab', sans-serif;
  padding: 0.75em 2em;
  letter-spacing: 0.05rem;
  margin: 1em;
  /* width: 20rem; */
}

.btn:focus {
  outline: 2px dotted #55d7dc;
}


.grid-container {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-gap: 20px;
  font-size: 1.2em;
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
            background-color: #222831;
            /* filter: opacity(0.5); */
            display: flex;
            justify-content: center;
            align-items: center;
            /* position: fixed;
            top: 0px; */
        }
        .card img{
            width:200px;
            border-radius:50%;
            border: 5px solid #272133;
  margin-top: 20px;
  margin-bottom: 20px;
  box-shadow: 0 10px 50px rgba(235, 25, 110, 1);

        }

        .student{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-color:white;
            color:black;
        }
.stu{
    font-size:25px;
}
.insert{
    /* border:1px solid rgba(235, 25, 110, 1); */
    text-decoration:none;
    text-transform:uppercase;
    transition:0.5s;
    margin:auto;
    padding:10px 20px;
    background-color:white;
    color:grey;
    border-radius:5px;

}
.insert:hover{
    color:white;
    border-radius:5px;
background:rgba(235, 25, 110, 1);
color: #fff;
box-shadow:0 10px 50px rgba(235, 25, 110, 1)
}
.buttons{
    width:100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
    /* background-color:white;
    color:black; */
    margin-top:10px;
    border-bottom:10px solid white;

}

#card1{
    height: 37rem;
    
    /* margin-top:20px; */
}
#card2{
    margin-top:70px;
    /* margin-bottom:30px; */
    
}
#card3{
    margin-bottom:70px;
    /* margin-bottom:30px; */
    
}
.card p{
    font-size:25px;
    margin-top:10px;
    margin-bottom:10px;

}
    </style>
</head>
<body>
<div id="head1">
        <div class="h1">Maa Saraswati Girls Hostel</div>

    </div>
<div class="container">
  <div class="card" id="card1">
  <img src="https://img.freepik.com/premium-vector/cute-teacher-holding-book-cartoon-illustration_426162-101.jpg?w=2000" alt="">
  <?php
                    include('conn.php');
                    $sql="select warden_name, warden_email,fid,warden_phone from warden";
                    $res=mysqli_query($conn,$sql);
                    while($result=mysqli_fetch_assoc($res)){
                        echo '<p class="card__name">Name: '.$result['warden_name'].'</p>';  
                        echo '<p class="card__name">Email: '.$result['warden_email'].'</p>';  
                        echo '<p class="card__name">Fid: '.$result['fid'].'</p>';  
                        echo '<p class="card__name">Phone Number: '.$result['warden_phone'].'</p>';  
                        }
                        ?>
    
</div>
<div class="card" id="card2">
    <!-- <div class="student">
        </div> -->
        <p class="stu">Student Details</p> 
        <div class="container flex justify-center mx-auto my-auto bg-gray-900">
            <div class="flex flex-col">
                <div class="w-full">
                    <div class="border-b border-gray-200 ">
                        <table class="divide-y divide-gray-300 ">
                            <thead class="bg-gray-800">
                                <tr>
                                    <th class="px-4 py-3 text-xm text-white ">
                                        S no.
                                    </th>
                                    <th class="px-4 py-3 text-xm text-white">
                                        Student Name
                                    </th>
                                    <th class="px-4 py-3 text-xm text-white">
                                        Roll Number
                                    </th>
                                    <th class="px-4 py-3 text-xm text-white">
                                        Email
                                    </th>
                                    <th class="px-4 py-3 text-xm text-white">
                                        Phone Number
                                    </th>
                                    <th class="px-4 py-3 text-xm text-white">
                                        Discipline
                                    </th>
                                    <th class="px-4 py-3 text-xm text-white">
                                        Batch
                                    </th>
                                    <th class="px-4 py-3 text-xm text-white">
                                        Room Number
                                    </th>
                                    
                        </tr>
                    </thead>
                    <?php  
                    include("conn.php");
                    $sql = "SELECT * FROM student";
                    $res=mysqli_query($conn,$sql);
                    $i=1;
                    while($result=mysqli_fetch_array($res))
                    {
                        echo '<tbody class="bg-gray-600 divide-y divide-gray-300">
                        <tr class="whitespace-nowrap">
                        <td class="px-6 py-4 text-sm text-white">
                        '.$i.'
                        </td>
                        <td class="px-6 py-4 text-sm text-white">
                        '.$result['student_name'].'
                        </td>
                        <td class="px-6 py-4">
                        <div class="text-sm text-white">
                        '.$result['roll_number'].'
                        </div>
                        </td>
                        <td class="px-6 py-4">
                        <div class="text-sm text-white">
                        '.$result['student_email'].'
                                </div>
                                </td>
                                <td class="px-6 py-4">
                                <div class="text-sm text-white">
                                '.$result['student_phone'].'
                                </div>
                                </td>
                                <td class="px-6 py-4">
                                <div class="text-sm text-white">
                                '.$result['discipline'].'
                                </div>
                                    </td>
                                    <td class="px-6 py-4">
                                    <div class="text-sm text-white">
                                    '.$result['batch'].'
                                    </div>
                                    
                                    </td>
                                    <td class="px-6 py-4">
                                    <div class="text-sm text-white">
                                    '.$result['room_number'].'
                                    </div>
                                    </td>
                                    
                                    </tr>
                                    </tbody>';
                                    $i++;
                    } 
                                ?>
                    
                </table>
            </div>
        </div>
    </div>
</div>
<div class="buttons">

    <button class="btn draw-border"><a href="insertstu.html" class="insert">Enroll New Student </a></button>
    <button class="btn draw-border"><a href="updatestu.html" class="insert">Edit Student </a></button>
    <button class="btn draw-border"><a href="deletestu.html" class="insert">Delete Student </a></button>
</div>


<!-- staff  -->

<p class="stu">Staff Details</p> 
<div class="container flex justify-center mx-auto bg-gray-900">
    <div class="flex flex-col">
        <div class="w-full">
            <div class="border-b border-gray-200 shadow">
                <table class="divide-y divide-gray-300 ">
                    <thead class="bg-gray-800">
                        <tr>
                            <th class="px-4 py-3 text-xm text-white">
                                S no.
                            </th>
                            <th class="px-4 py-3 text-xm text-white">
                                Staff Name
                            </th>
                            <th class="px-4 py-3 text-xm text-white">
                                Staff ID
                            </th>
                            
                            <th class="px-4 py-3 text-xm text-white">
                                Phone Number
                            </th>
                            <th class="px-4 py-3 text-xm text-white">
                                Work Type
                            </th>
                            
                            
                        </tr>
                    </thead>
                    <?php  
                    include("conn.php");
                    $sql2 = "SELECT * FROM staff";
                    $res2=mysqli_query($conn,$sql2);
                    $i=1;
                    while($result2=mysqli_fetch_array($res2))
                    {
                        echo '<tbody class="bg-gray-600 divide-y divide-gray-300">
                        <tr class="whitespace-nowrap">
                        <td class="px-6 py-4 text-sm text-white">
                        '.$i.'
                        </td>
                        <td class="px-6 py-4 text-sm text-white">
                        '.$result2['staff_name'].'
                        </td>
                            <td class="px-6 py-4">
                            <div class="text-sm text-white">
                            '.$result2['staff_id'].'
                            </div>
                            </td>
                                
                            <td class="px-6 py-4">
                            <div class="text-sm text-white">
                            '.$result2['staff_phone'].'
                            </div>
                            </td>
                            <td class="px-6 py-4">
                            <div class="text-sm text-white">
                            '.$result2['work_type'].'
                            </div>
                            </td>
                            
                            
                            </tr>
                            </tbody>';
                            $i++;
                        }
                        
                        
                        ?>
                    
                </table>
            </div>
        </div>
    </div>
</div>

<div class="buttons">

    <button class="btn draw-border"><a href="insertstaff.html" class="insert">Register new Staff </a></button>
    <button class="btn draw-border"><a href="upstaff.html" class="insert">Edit Staff </a></button>
    <button class="btn draw-border"><a href="delstaff.html" class="insert">Delete Staff </a></button>

</div>


<div class="card" id="card3">
<p class="stu">Complaints</p> 
        <div class="container flex justify-center mx-auto my-auto bg-gray-900">
            <div class="flex flex-col">
                <div class="w-full">
                    <div class="border-b border-gray-200 ">
                        <table class="divide-y divide-gray-300 ">
                            <thead class="bg-gray-800">
                                <tr>
                                    <th class="px-4 py-3 text-xm text-white ">
                                        S no.
                                    </th>
                                    <th class="px-4 py-3 text-xm text-white">
                                        Roll Number
                                    </th>
                                    <th class="px-4 py-3 text-xm text-white">
                                        Complaint
                                    </th>
                                    <th class="px-4 py-3 text-xm text-white">
                                        Date and Time
                                    </th>
                    </tr>
                    </thead>
                    <?php  
                    include("conn.php");
                    $sql2 = "SELECT * FROM complaints";
                    $res2=mysqli_query($conn,$sql2);
                    $i=1;
                    while($result2=mysqli_fetch_array($res2))
                    {
                        echo '<tbody class="bg-gray-600 divide-y divide-gray-300">
                        <tr class="whitespace-nowrap">
                        <td class="px-6 py-4 text-sm text-white">
                        '.$i.'
                        </td>
                        <td class="px-6 py-4">
                        <div class="text-sm text-white">
                        '.$result2['roll_number'].'
                        </div>
                        </td>
                        <td class="px-6 py-4 text-sm text-white">
                        '.$result2['complaint'].'
                        </td>
                        <td class="px-6 py-4">
                        <div class="text-sm text-white">
                        '.$result2['time_date'].'
                        </div>
                        </td>
                        </tr>
                            </tbody>';
                            $i++;
                    }
                    ?>
                    </table>
            </div>
        </div>
    </div>
</div>
</div>




</body>
</html>