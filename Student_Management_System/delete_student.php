<script type="text/javascript">
	if(confirm("Are you sure want to delete the data?"))
	{
		document.write("<?php 
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"demo");
		$query = "delete from student where enrollment_no = $_POST[enrollment_no]";
		$query_run = mysqli_query($connection,$query);
		?>");
	 	window.location.href = "admin.php";
	}
	else
	{
		window.location.href = "admin.php";
	}
</script>
