<?php

	include("../includes/dbcon.php");

	$c= $_SESSION['email'];

	if(isset($_POST['yes']))
	{
		$delete = "delete from developers where email='$c'";

		$run_delete = mysqli_query($con, $delete);

		if($run_delete)
		{
			session_destroy();

			echo "<script>alert('Your Account has been deleted. Good Bye !')</script>";

			echo "<script>window.open('../index.php','_self')</script>";
		}
		
	}
	else if(isset($_POST['no']))
		{
			echo "<script>window.open('developer_account.php','_self')</script>";
		}
?>