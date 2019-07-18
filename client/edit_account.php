<?php

	@session_start();

	include("../includes/dbcon.php");

	if(isset($_GET['edit_account']))
	{
		$email = $_SESSION['email'];

		$get_user = "select * from client where email='$email'";

		$run_user = mysqli_query($con, $get_user);

		$row = mysqli_fetch_array($run_user);

		$id = $row['client_id'];

		$fname = $row['fname'];

		$lname = $row['lname'];

		$country = $row['country'];

		$state = $row['state'];

		$contact = $row['contact'];

	}

?>

<form class="was-validated" action="" method="post" enctype="multipart/form-data">
	<div class="form-row">
		<div class="form-group col-sm-6">
			<label>First Name</label>
			<input type="text" name="fname" class="form-control" placeholder="First Name" value="<?php echo $fname; ?>">
		</div>
		<div class="form-group col-sm-6">
			<label>Last Name</label>
			<input type="text" name="lname" class="form-control" placeholder="Last Name" value="<?php echo $lname; ?>">
		</div>
		</div>

        <div class="form-row">
            <div class="form-group col-sm-6">
                <label>Country</label>
                <select class="form-control" name="country">
                    <option selected="" value="<?php echo $country; ?>"><?php echo $country; ?></option>
                    <option>India</option>
                </select>
            </div>
            <div class="form-group col-sm-6">
                <label>State</label>
                <select class="form-control" name="state">
                    <option selected="" value="<?php echo $state; ?>"><?php echo $state; ?></option>
                    <option>New Delhi</option>
                    <option>Mumbai</option>
                    <option>Chennai</option>
                    <option>Kolkata</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label>Contact No.</label>
            <input type="tel" name="contact" class="form-control" placeholder="eg:- 9999999999" value="<?php echo $contact; ?>">
        </div>
        <div class="form-group">
            <br><button type="submit" name="update_account" class="btn btn-success form-control rounded-0 shadow">Save Changes</button>
        </div>
</form>

<?php

	if(isset($_POST['update_account']))
	{
		$update_id = $id;

		$fname = $_POST['fname'];

		$lname = $_POST['lname'];

		$country = $_POST['country'];

		$state = $_POST['state'];

		$contact = $_POST['contact'];

		$update = "UPDATE client SET fname='$fname',lname='$lname',country='$country',state='$state',contact='$contact' WHERE client_id='$update_id'";

		$run = mysqli_query($con, $update);
		
		if($run)
		{
			echo "<script>alert('Your account has been updated.!')</script>";

			echo "<script>window.open('client_account.php','_self')</script>";
		}
	}

?>