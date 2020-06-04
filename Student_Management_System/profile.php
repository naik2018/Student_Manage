<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Profile Page</title>
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        ul.breadcrumb {
  padding: 10px 16px;
  list-style: none;
  background-color: #eee;
}
ul.breadcrumb li {
  display: inline;
  font-size: 18px;
}
ul.breadcrumb li+li:before {
  padding: 8px;
  color: black;
  content: "/\00a0";
}
ul.breadcrumb li a {
  color: #0275d8;
  text-decoration: none;
}
ul.breadcrumb li a:hover {
  color: #01447e;
  text-decoration: underline;
}
    </style>
    <?php
		session_start();
		$name = "";
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"demo");
    ?>
</head>

    <body class="fix-header fix-sidebar card-no-border">
<?php
if(isset($_SESSION["uname"])) {
?>
<div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
</div>
<div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
                <div class="navbar-header">
                        <b>
                            SCET 
                          </b>
                                    
                </div>
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-md-0 ">
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-cog" aria-hidden="true"></i>&nbsp;&nbsp;Dashboard</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/admin.png" alt="user" class="profile-pic m-r-5" /><?php echo $_SESSION["uname"]; ?></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <aside class="left-sidebar">
           <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li>
                        <a href="student.php" class="waves-effect"><i class="fa fa-dashboard m-r-10" aria-hidden="true"></i>&nbsp;Dashboard</a>
                        </li>
                        <li>
                            <a href="#" class="waves-effect active"><i class="fa fa-user m-r-10" aria-hidden="true"></i>&nbsp;Edit Profile</a>
                        </li>
                        <li>
                            <a href="result.php" class="waves-effect"><i class="fa fa-table m-r-10" aria-hidden="true"></i>&nbsp;Results</a>
                        </li>
                        <li>
                            <br>
                        </li>
                        <li>
                            <a href="logout2.php" class="waves-effect"><i class="fa fa-power-off m-r-10" aria-hidden="true"></i>&nbsp;Logout</a>
                        </li>
                       
                        
                    </ul>
                    <div class="text-center m-t-30">
                    </div>
                </nav>
            </div>
        </aside>

        <div class="page-wrapper">
            <div class="container-fluid">
              <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Profile Details</h3>
                        <ul class="breadcrumb">
                        <li><a href="abc.html">Home</a></li>
                        <li>profile</li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
                    </div>
                </div>
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-block">
                                <center class="m-t-30"> <img src="images/admin.png" class="img-circle" width="150" />
                                    <h4 class="card-title m-t-10"><?php echo $_SESSION["uname"]; ?></h4>
                                    <h6 class="card-subtitle">BE-III(CO-M)</h6>
                                </center>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-block">
                            <?php
                                 $query = "select * from student where user = '".$_SESSION['uname']."'";
				                 $query_run = mysqli_query($connection,$query);
				                 while ($row = mysqli_fetch_assoc($query_run)) 
				                    {?>
                                <form action="edit_student.php" method="post" class="form-horizontal form-material">
                                    
                                    <div class="form-group">
                                        <label class="col-md-12">Full Name</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line" name="fullname" value="<?php echo $row['fullname']?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">User Name</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line" name="uname" value="<?php echo $row['user']?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Enrollment No</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="student@admin.com" class="form-control form-control-line"name="enrollment_no" value="<?php echo $row['enrollment_no']?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Mobile No</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line" name="mobile_no" value="<?php echo $row['mobile_no']?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Email-ID</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line" name="email_id" value="<?php echo $row['email_id']?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Year Of Graduation</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line" name="graduation_year" value="<?php echo $row['graduation_year']?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Password</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line" name="pass" value="<?php echo $row['pass']?>" >
                                        </div>
                                    </div>
                                   
                                    
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input class="btn btn-success" type="submit" class="a1" name="edit" value="Save">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php }?>
    
</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/waves.js"></script>
    <script src="js/sidebarmenu.js"></script>
    <script src="js/sticky-kit.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/jquery.flot.js"></script>
    <script src="js/jquery.flot.tooltip.min.js"></script>
    <script src="js/flot-data.js"></script>
    <script src="jsjQuery.style.switcher.js"></script>








<?php
}
else 
{
    echo "<script>alert('Please login first')</script>";
    echo "<script>location.href='student_login.php'</script>";
}
?>
</body>
</html>