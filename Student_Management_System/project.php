<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>List Of Projects</title>
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
                    
                </div>
            </nav>
        </header>

        <aside class="left-sidebar">
           <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        
                        <li>
                            <a href="abc.html" class="waves-effect"><i class="fa fa-home m-r-10" aria-hidden="true"></i>&nbsp;Home</a>
                        </li>
                        <li>
                            <a href="admin_login.php" class="waves-effect"><i class="fa fa-user m-r-10" aria-hidden="true"></i>&nbsp;Admin-Login</a>
                        </li>
                        <li>
                            <a href="student_login.php" class="waves-effect"><i class="fa fa-male m-r-10" aria-hidden="true"></i>&nbsp;Student-Login</a>
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
                        <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
                        <ul class="breadcrumb">
                        <li><a href="abc.html">Home</a></li>
                        
                        <li>Projects</li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-block">
                               
                                <center><h4 class="card-title">List of previous year's top projects</h4></center>
                                <div class="table-responsive m-t-40">
                                    <table class="table stylish-table">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Group Head name</th>
                                                <th>Project name</th>
                                                <th>Guide name</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="width:50px;"><span class="round">G</span></td>
                                                <td>
                                                    <h6>Gabbar Singh</h6><small class="text-muted">Web Development</small></td>
                                                <td>Online Shopping</td>
                                                <td>Prof. Urmi Desai</td>
                                            </tr>
                                           
                                            <tr>
                                                <td><span class="round round-success">M</span></td>
                                                <td>
                                                    <h6>MS Dhoni</h6><small class="text-muted"> Cyber Security</small></td>
                                                <td>Pocket Certificates using Double Encryption</td>
                                                <td>Prof. Jaydeep Barad</td>
                                            </tr>
                                            <tr>
                                                <td><span class="round round-primary">S</span></td>
                                                <td>
                                                    <h6>Salman Khan</h6><small class="text-muted">Machine Learning</small></td>
                                                <td>Covid Chatbot</td>
                                                <td>Dr.Nirali Nanavati</td>
                                            </tr>
                                            <tr>
                                                <td><span class="round round-warning">A</span></td>
                                                <td>
                                                    <h6>Amitabh Bachchan</h6><small class="text-muted">IOT Project</small></td>
                                                <td>Home Automation</td>
                                                <td>Prof. Vandana Joshi</td>
                                            </tr>
                                            <tr>
                                                <td><span class="round round-danger">R</span></td>
                                                <td>
                                                    <h6>Rajkumar Rao</h6><small class="text-muted">Networking</small></td>
                                                <td>Dynamic Cloud Network Control Under Reconfiguration Delay and Cost</td>
                                                <td>Prof. Snehal Gandhi</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                    
                    
                </div>
            </div>
        </div>
        



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









</body>
</html>