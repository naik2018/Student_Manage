<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <style type="text/css">
    body{
        height: 100px;
  background-color: red; 
  background-image: linear-gradient(-90deg, red, yellow);   
 }
    
		#header{
			height: 10%;
			width: 100%;
			top: 2%;
			background-color: black;
			position: fixed;
			color: white;
		}
		#left_side{
			height: 75%;
			width: 15%;
			top: 10%;
			position: fixed;
		}
		#right_side{
			height: 75%;
			width: 80%;
			background-color: rgba(24, 3, 73, 0.75);
			position: fixed;
			left: 17%;
			top: 21%;
			color: yellow;
			border: solid 1.5px black;
		}
		#top_span{
			top: 15%;
			width: 80%;
			left: 17%;
			position: fixed;
		}
		#td{
			border: 1px solid black;
			padding-left: 2px;
			text-align: left;
			width: 200px;
        }
        .button {
  background-color: #1c87c9;
  -webkit-border-radius: 60px;
  border-radius: 60px;
  border: none;
  color: #eeeeee;
  cursor: pointer;
  display: inline-block;
  font-family: sans-serif;
  font-size: 20px;
  padding: 10px 10px;
  text-align: center;
  text-decoration: none;
}
@keyframes glowing {
        0% {
          background-color: #2ba805;
          box-shadow: 0 0 5px #2ba805;
        }
        50% {
          background-color: #49e819;
          box-shadow: 0 0 20px #49e819;
        }
        100% {
          background-color: #2ba805;
          box-shadow: 0 0 5px #2ba805;
        }
      }
      .button {
        animation: glowing 1300ms infinite;
      }
      .a1{
            padding:10px 60px;
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
            background: #03e9f4;
            color:#fff;
            text-decoration: none;
            box-shadow: 0 0 5px #03e9f4, 0 0 25px #03e9f4, 0 0 50px #03e9f4, 0 0 100px #03e9f4 ;
        }

        .a2{
            padding:10px 60px;
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

        

	</style>
	<?php
		session_start();
		$name = "";
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"demo");
    ?>
    
</head>

<body>
<?php
if(isset($_SESSION["uname"])) {
?>
	<div id="header" style="font-size:20px;"><br>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <i class="fas fa-user-circle" style="font-size:25px;"></i> <?php echo $_SESSION['uname'];?>
        &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Welcome To ADMIN Page
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="logout1.php" tite="Logout" style="text-decoration:none;">Logout</a>		
	</div>
	<span id="top_span"><marquee style="color:white;font-weight:bold;">Note:- This is Admin protal from where you can deal with students informations.</marquee></span>
	<div id="left_side">
		<br><br><br>
		<form action="" method="post">
			<table>
				<tr>
					<td>
						&nbsp;&nbsp;&nbsp;<input type="submit" class="button" name="search_student" value="Search Student"><br><br><br><br>
					</td>
				</tr>
				<tr>
					<td>
                    &nbsp;&nbsp;&nbsp;<input class="button" type="submit" name="edit_student" value="Edit Student"><br><br><br><br>
					</td>
				</tr>
				<tr>
					<td>
                    &nbsp;&nbsp;&nbsp;<input type="submit" class="button" name="add_new_student" value="Add New Student"><br><br><br><br>
					</td>
				</tr>
				<tr>
					<td>
                    &nbsp;&nbsp;&nbsp;<input type="submit" class="button" name="delete_student" value="Delete Student">
					</td>
				</tr>
				
			</table>
		</form>
	</div>
	<div id="right_side"><br><br>
		<div id="demo">
			<?php
				if(isset($_POST['search_student']))
				{
					?>
					<center>
					<form action="" method="post">
					&nbsp;&nbsp;<b>Enter Enrollment No:</b>&nbsp;&nbsp; <input type="text" name="enrollment_no">
					&nbsp;&nbsp;<input type="submit" class="a1" name="search_by_roll_no_for_search" value="Search">
					</form><br><br>
					</center>
					<?php
				}
				if(isset($_POST['search_by_roll_no_for_search']))
				{
					$query = "select * from student where enrollment_no = '$_POST[enrollment_no]'";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) 
					{
						?><center>
						<table>
                            <tr>
								<td>
                                &nbsp;&nbsp;&nbsp;<b>FullName :</b>
								</td> 
								<td>
									<input type="text" size=24 value="<?php echo $row['fullname']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
                                &nbsp;&nbsp;&nbsp;<b>Enrollment No :</b>
								</td> 
								<td>
									<input type="text" size=24 value="<?php echo $row['enrollment_no']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
                                &nbsp;&nbsp;&nbsp;<b>Email-Id :</b>
								</td> 
								<td>
									<input type="text" size=24 value="<?php echo $row['email_id']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
                                &nbsp;&nbsp;&nbsp;<b>Mobile No :</b>
								</td> 
								<td>
									<input type="text" size=24 value="<?php echo $row['mobile_no']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
                                &nbsp;&nbsp;&nbsp;<b>Year Of Passing :</b>
								</td> 
								<td>
									<input type="text" size=24 value="<?php echo $row['graduation_year']?>" disabled>
								</td>
							</tr>
							
                        </table>
                    </center>
						<?php
					}
				}
			?>
		<?php
			if(isset($_POST['edit_student']))
			{
				?>
				<center>
				<form action="" method="post">
				&nbsp;&nbsp;<b>Enter Enrollment No:</b>&nbsp;&nbsp; <input type="text" name="enrollment_no">
				&nbsp;&nbsp;<input type="submit" class="a2" name="search_by_roll_no_for_edit" value="Search">
				</form><br><br>
				</center>
				<?php
			}
			if(isset($_POST['search_by_roll_no_for_edit']))
			{
				$query = "select * from student where enrollment_no = $_POST[enrollment_no]";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
					?>
					<center><h4 style="color:yellow;font-weight:bold;">Edit the given details and submit to edit Student</h4></center>

					<form action="admin_edit_student.php" method="post">
						<table>
                        <tr>
							<td>
                            &nbsp;&nbsp;&nbsp;<b>Full Name :</b>
							</td> 
							<td>
								<input type="text" size=24 name="fullname" value="<?php echo $row['fullname'];?>">
							</td>
						</tr>
						<tr>
							<td>
                            &nbsp;&nbsp;&nbsp;<b>User Name :</b>
							</td> 
							<td>
								<input type="text" size=24 name="uname" value="<?php echo $row['user'];?>">
							</td>
						</tr>
						<tr>
							<td>
                            &nbsp;&nbsp;&nbsp;<b>Password :</b>
							</td> 
							<td>
								<input type="text" size=24 name="pass" value="<?php echo $row['pass'];?>">
							</td>
						</tr>
						<tr>
							<td>
                            &nbsp;&nbsp;&nbsp;<b>Enrollment No :</b>
							</td> 
							<td>
								<input type="text" size=24 name="enrollment_no" value="<?php echo $row['enrollment_no']; ?>">
							</td>
						</tr>
						<tr>
							<td>
                            &nbsp;&nbsp;&nbsp;<b>Mobile No :</b>
							</td> 
							<td>
								<input type="text" size=24 name="mobile_no" value="<?php echo $row['mobile_no'];?>">
							</td>
						</tr>
						<tr>
							<td>
                            &nbsp;&nbsp;&nbsp;<b>Email-Id :</b>
							</td> 
							<td>
								<input type="text" size=24 name="email_id" value="<?php echo $row['email_id'];?>">
							</td>
						</tr>
                        <tr>
							<td>
                            &nbsp;&nbsp;&nbsp;<b>Year Of Passing :</b>
							</td> 
							<td>
								<input type="text" size=24 name="graduation_year" value="<?php echo $row['graduation_year'];?>">
							</td>
                        </tr>
                        <br>
						<tr>
							<td></td>
							<td>
								<br><input type="submit" class="a1" name="edit" value="Save">
							</td>
                        </tr>
					</table>
					</form>
					<?php
				}
			}
		?>
		<?php
			if(isset($_POST['delete_student']))
			{
				?>
				<center>
				<form action="delete_student.php" method="post">
				&nbsp;&nbsp;<b>Enter Enrollment No:</b>&nbsp;&nbsp; <input type="text" name="enrollment_no">
				&nbsp;&nbsp;<input type="submit" class="a2" name="search_by_roll_no_for_delete" value="Delete">
				</form><br><br>
				</center>
				<?php
			}
			?>

			<?php 
				if(isset($_POST['add_new_student'])){
					?>
					<center><h4 style="color:yellow;font-weight:bold;">Fill the given details and submit to add a new Student</h4></center>
					<form action="add_student.php" method="post">
						<table>
                        <tr>
							<td>
                            &nbsp;&nbsp;&nbsp;<b>User Name :</b>
							</td> 
							<td>
								<input type="text" size=24 name="uname" required>
							</td>
                        </tr>
                        <tr>
							<td>
                            &nbsp;&nbsp;&nbsp;<b>Password :</b>
							</td> 
							<td>
								<input type="text" size=24 name="pass" required>
							</td>
						</tr>
                        <tr>
							<td>
                            &nbsp;&nbsp;&nbsp;<b>Full Name :</b>
							</td> 
							<td>
								<input type="text" size=24 name="fullname" required>
							</td>
						</tr>
						<tr>
							<td>
                            &nbsp;&nbsp;&nbsp;<b>Enrollment No :</b>
							</td> 
							<td>
								<input type="text" size=24 name="enrollment_no" required>
							</td>
						</tr>
						
						<tr>
							<td>
                            &nbsp;&nbsp;&nbsp;<b>Email-Id :</b>
							</td> 
							<td>
								<input type="text" size=24 name="email_id" required>
							</td>
                        </tr>
                        <tr>
							<td>
                            &nbsp;&nbsp;&nbsp;<b>Mobile No :</b>
							</td> 
							<td>
								<input type="text" size=24 name="mobile_no" required>
							</td>
						</tr>
                        <tr>
							<td>
                            &nbsp;&nbsp;&nbsp;<b>Year Of Passing :</b>
							</td> 
							<td>
								<input type="text" size=24 name="graduation_year" required>
							</td>
                        </tr>
                        <br>
						<tr>
							<td></td>
							<td>
								<br><input type="submit" class="a1" name="edit" value="Save">
							</td>
                        </tr>
					</table>
					</form>
					<?php
				}
			?>
			
		</div>
    </div>
    <?php
}else 
{
    echo "<script>alert('Please login first')</script>";
    echo "<script>location.href='admin_login.php'</script>";}
?>
</body>
</html>

