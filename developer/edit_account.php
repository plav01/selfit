<?php

	@session_start();

	include("../includes/dbcon.php");

	if(isset($_GET['edit_account']))
	{
		$email = $_SESSION['email'];

		$get_user = "select * from developers where email='$email'";

		$run_user = mysqli_query($con, $get_user);

		$row = mysqli_fetch_array($run_user);

		$id = $row['developer_id'];

		$fname = $row['fname'];

		$lname = $row['lname'];

		$category = $row['categories'];

		$skills = $row['skills'];

		$country = $row['country'];

		$state = $row['state'];

		$contact = $row['contact'];

		$bio = $row['bio'];

	}

?>

	<form class="w-100" action="" method="post" enctype="multipart/form-data">
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
       
            <div class="form-group">
                <label>Developer Categories</label>
                <select class="form-control" name="category">
                    <option selected="" value="<?php echo $category; ?>"><?php echo $category; ?></option>
                        <?php

							$get_cats = "SELECT * FROM categories";
							$run_cats = mysqli_query($con,$get_cats);

							while($row_cats=mysqli_fetch_assoc($run_cats))
							{
								
								$cat_title = $row_cats['cat_title'];

								echo "<option value='$cat_title'>$cat_title</option>";
							}
						?>
                </select>
            </div>
            <div class="form-group">
                <label>Skills</label>
                <input type="text" name="skills" class="form-control" placeholder="eg:- Python, Java, Javascript, Node.js" value="<?php echo $skills; ?>">
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
                    <label>Add Bio</label>
                    <textarea name="bio" cols="30" rows="5" class="form-control"><?php echo $bio; ?></textarea>
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

		$category = $_POST['category'];

		$skills = $_POST['skills'];

		$country = $_POST['country'];

		$state = $_POST['state'];

		$contact = $_POST['contact'];

		$bio = $_POST['bio'];

		$update = "UPDATE developers SET fname='$fname',lname='$lname',categories='$category',skills='$skills',country='$country',state='$state',contact='$contact',bio='$bio' WHERE developer_id='$update_id'";

		$run = mysqli_query($con, $update);
		
		if($run)
		{
			echo "<script>alert('Your account has been updated.!')</script>";

			echo "<script>window.open('developer_account.php','_self')</script>";
		}
	}

?>

