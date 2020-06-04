<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"demo");
	$query = "update student set user='$_POST[uname]',
	pass='$_POST[pass]',
	fullname='$_POST[fullname]',
	email_id='$_POST[email_id]',
	mobile_no=$_POST[mobile_no],
	graduation_year=$_POST[graduation_year] where enrollment_no = $_POST[enrollment_no]";
	$query_run = mysqli_query($connection,$query);
?>

<script type="text/javascript">
	alert("Details edited successfully.");
	window.location.href = "admin.php";
</script>

