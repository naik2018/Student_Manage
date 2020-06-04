<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"demo");
	$query = "insert into student values
	('',
	'$_POST[uname]',
	'$_POST[pass]',
	'$_POST[fullname]',
	$_POST[enrollment_no],
	'$_POST[email_id]',
	$_POST[mobile_no],
	$_POST[graduation_year])";
	$query_run = mysqli_query($connection,$query);
?>

<script type="text/javascript">
	alert("New Student Added successfully.");
	window.location.href = "admin.php";
</script>

