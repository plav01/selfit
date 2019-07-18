
<h4 class="text-muted mt-sm-3">Do you really want to Delete Account</h4><br><br>

<form method="post" action="">
	<div class="form-row">
		<div class="form-group col-sm-5">
			
         		<button type="submit" name="yes" class="btn btn-danger form-control shadow">Yes, I want to Delete</button>
         	
        </div>

        <div class="form-group col-sm-5">
			
         	<button type="submit" name="no" class="btn btn-success form-control shadow">No, I Denied</button>
         	
        </div>
    </div>
</form>


<?php

	include("../includes/dbcon.php");

	$c= $_SESSION['email'];

	if(isset($_POST['yes']))
	{
		$delete = "delete from client where email='$c'";

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
			echo "<script>window.open('client_account.php','_self')</script>";
		}
?>