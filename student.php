<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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

        .container {
  display: grid;
  grid-template-columns: 300px 1100px;
  grid-gap: 50px;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-color: #f5f5f5;
  font-family: 'Baloo Paaji 2', cursive;
}

.card {
  background-color: #1a202c;
  height: 37rem;
  border-radius: 5px;
  display: flex;
  flex-direction: column;
  align-items: center;
  box-shadow: rgba(0, 0, 0, 0.7);
  color: white;
} 

.card img{
            width:200px;
            border-radius:50%;
            border: 5px solid #272133;
  margin-top: 20px;
  margin-bottom: 20px;
  box-shadow: 0 10px 50px rgba(235, 25, 110, 1);

        }
        button {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
            
            text-decoration: none;
            text-transform: uppercase;
            transition: 0.5s;
            margin-top: 50px;
            padding: 10px 20px;
            font-family: 'Baloo Paaji 2', cursive;

        }
        form {
            font-family: 'Baloo Paaji 2', cursive;
            width: 600px;
            background-color: rgba(255, 255, 255, 0.13);
            margin-top:70px;
            /* margin-bottom:30px; */
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
            padding: 30px 35px;
        }

        form * {
            font-family: 'Poppins', sans-serif;
            color: #ffffff;
            letter-spacing: 0.5px;
            outline: none;
            border: none;
            font-family: 'Baloo Paaji 2', cursive;
        }
        form h3 {
            font-family: 'Baloo Paaji 2', cursive;
            font-size: 32px;
            font-weight: 500;
            line-height: 42px;
            text-align: center;
            margin-top:0%;
        }

        label {
            font-family: 'Baloo Paaji 2', cursive;
            display: block;
            margin-top: 30px;
            font-size: 16px;
            font-weight: 500;
        }

        input {
            font-family: 'Baloo Paaji 2', cursive;
            display: block;
            height: 50px;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.07);
            border-radius: 3px;
            padding: 0 10px;
            margin-top: 8px;
            font-size: 14px;
            font-weight: 300;
        }
        button {
            font-family: 'Baloo Paaji 2', cursive;
            margin-top: 50px;
            width: 100%;
            background-color: #ffffff;
            color: #080710;
            padding: 15px 0;
            font-size: 18px;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
        }

        

        button:hover {
            font-family: 'Baloo Paaji 2', cursive;
            background: rgba(235, 25, 110, 1);
            color: #fff;
            border-radius: 5px;
            box-shadow: 0 10px 50px rgba(235, 25, 110, 1)
        }

        button {
            font-family: 'Baloo Paaji 2', cursive;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;

            text-decoration: none;
            text-transform: uppercase;
            transition: 0.5s;
            margin-top: 50px;
            padding: 10px 20px;

        }
    </style>
</head>
<body>
<div id="head1">
    <div class="h1">Maa Saraswati Girls Hostel</div>
</div>
<div class="container">
  <div class="card">
  <img src="https://i.pinimg.com/736x/5a/ba/d3/5abad38b62aae23e8e5bc54351d7e816.jpg" alt="">
  <?php
                    include('conn.php');
                    $email=$_POST['username'];
                    $pass=$_POST['password'];
                    $sql="SELECT * FROM student WHERE student_email='$email' AND student_password='$pass'";
                    $res=mysqli_query($conn,$sql);
                    if($res){

                    
                    while($result=mysqli_fetch_assoc($res)){
                        echo '<p class="card__name">Name: '.$result['student_name'].'</p>';  
                        echo '<p class="card__name">Email: '.$result['student_email'].'</p>';  
                        echo '<p class="card__name">Rollnumber: '.$result['roll_number'].'</p>';  
                        echo '<p class="card__name">Phone: '.$result['student_phone'].'</p>';   
                        echo '<p class="card__name">Discipline: '.$result['discipline'].'</p>';   
                        
                        echo '<p class="card__name">Batch: '.$result['batch'].'</p>';   
                        echo '<p class="card__name">Room: '.$result['room_number'].'</p>';   
                        }
                    }
                    else{
                        header('location:/project/login2.html');
    

                    }
                        ?>
    </div>
    <div class="card">
    <form action="complaint.php" method="post" id="first">
                <h3>Complaint </h3>

                
                <label for="rollnum">Roll Number</label>
                <input type="number" placeholder="Roll number" id="rollnum" name="rollnum">
            <br>
                <label for="des">Complaint</label>
                <input type="text" placeholder="Write your complaint" id="des" name="des">
                

                <button>File Complaint</button>

            </form>

    </div>                    
    
</div>
</body>
</html>