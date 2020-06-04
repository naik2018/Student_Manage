<?php 
        $host="localhost";
        $user="root";
        $pwd="";
        $db="demo";
        $con=mysqli_connect($host,$user,$pwd,$db);

        session_start();

        if(isset($_POST['loginbttn'])){
            $uname=$_POST['uname'];
            $pass=$_POST['pass'];
            
            $result=mysqli_query($con,'select * from student where user="'.$uname.'" and pass="'.$pass.'"');
            if(mysqli_num_rows($result)==1)
            {
                $_SESSION['uname']=$uname;
                echo "<script>alert('you have Successfully Logged In');location.href='student.php'</script>";
                header('student.php');
            }
            else
            {
                echo "<script>alert('You Have Entered Incorrect UserId Or Password')</script>";
                echo "<script>location.href='student_login.php'</script>";
            } 
        }
        if(isset($_GET['logout']))
        {
            session_unregister('uname');
        }
        
        ?>
<!DOCTYPE html>
<html>
    <head><title>Student Login</title>
    <style>
         body, html {
  height: 100%;
}

* {
  box-sizing: border-box;
}

.bg-image {
  background-image: url("images/image1.jpg");

  filter: blur(8px);
  -webkit-filter: blur(7px);

  height: 100%;

  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.bg-text {
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0, 0.4); 
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}
.a1{
            padding:5px 30px;
            color:#4303f4;
            text-decoration: none;
            text-transform: uppercase;
            transition: 1.0s;
            letter-spacing: 4px;
            border: 1px solid #03e9f4;
            outline:0;
            border-radius:5px;
            font-weight: bold;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
        .a1:hover{
            background:green ;
            color:#fff;
            text-decoration: none;
            box-shadow: 0 0 5px green, 0 0 25px green, 0 0 50px green, 0 0 100px green ;
        }
        .a2{
            padding:5px 30px;
            color:#4303f4;
            text-decoration: none;
            text-transform: uppercase;
            transition: 1.0s;
            letter-spacing: 4px;
            border: 1px solid #03e9f4;
            outline:0;
            border-radius:5px;
            font-weight: bold;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
        .a2:hover{
            background: red;
            color:#fff;
            text-decoration: none;
            box-shadow: 0 0 5px red, 0 0 25px red, 0 0 50px red, 0 0 100px red ;
        }
        .a3{
            padding:5px 30px;
            color:#4303f4;
            text-decoration: none;
            text-transform: uppercase;
            transition: 1.0s;
            letter-spacing: 4px;
            border: 1px solid #03e9f4;
            outline:0;
            border-radius:5px;
            font-weight: bold;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
        .a3:hover{
            background: #03e9f4;
            color:#fff;
            text-decoration: none;
            box-shadow: 0 0 5px #03e9f4, 0 0 25px #03e9f4, 0 0 50px #03e9f4, 0 0 100px #03e9f4 ;
        }

    </style>    
    </head>
    <body alink="red" vlink="aqua">
        <div class="bg-image"></div>
        <div class="bg-text">
        <h1>Welcome to Student Login page for SCET Portal</h1>
        <form method="post" action="#">
            <table align=center style="font-size: 30;">
                <tr>
                    <td style="color:rgb(236, 217, 181);font-weight: bold;">Username :</td><td><input type="text" name="uname" placeholder="Username" ></td>
                </tr>
                <tr>    
                <td style="color:rgb(236, 217, 181);font-weight: bold;">Password :</td><td><input type="password" name="pass" placeholder="Password"></td>
                </tr>
                <tr><td>
                </td>
                <td></td>
                </tr>
                <tr><td>
                </td>
                <td></td>
                </tr>
                <tr><td>
                </td>
                <td></td>
                </tr>
                <tr><td>
                </td>
                <td></td>
                </tr>
                <tr>
                    <td><input type="submit" class="a1" name='loginbttn' style="font-size:20px;"></td>
                    <td><button type="reset" class="a2" style="font-size:20px;">Reset</button></td>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <td><a href="abc.html" class="a3" style="color:white;font-weight:bold;font-size:20px;text-decoration:none">Home</a></td>
                </tr>
            </table>
        </form>
        </div>
        
    </body>
    
</html>
