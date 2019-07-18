<?php

	session_start();

	include("header/header.php");

	include("functions/functions.php");
    include("includes/dbcon.php");
	

	?>
	
	 <style type="text/css">
	 
			

		</style>
	



<nav class="navbar navbar-expand-lg navbar-dark bg-success sticky-top">

	<div class="container">

		<a class="navbar-brand" href="index.php" style="font-family: Bauhaus93;font-size: 25px;">Self-iT</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
  		</button>

		<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
		
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link hvr">Already have an account?</a>
			</li>
			<li class="nav-item">
				<a class="nav-link active hvr" href="user_login.php">LOG IN</a>
			</li>
		</ul>
		
		</div>

	</div>

</nav>


<div class="jumbotron jumbotron-fluid">
	
	<div class="container shadow w-50 bg-white px-5 py-5">
		
		<h3 class="display-5 text-center text-muted">Signup and get to work</h3><br>

		<div class="row text-center" id="btn-box">
			
			<div class="col-sm-12">
				<a href="javascript:void(0)" id="signup_developer" class="btn btn-primary btn-lg w-50 shadow-lg rounded-0">Signup as Developer</a>
			</div>

			<div class="col-sm-12">
            	<br><a href="javascript:void(0)" id="signup_client" class="btn btn-success btn-lg w-50 shadow-lg rounded-0">Signup as Client</a>
            </div>

		</div>


		<!-- Developer Signup Form Starts Here -->
		<div id="developer" style="display: none;">
			
			<form class="was-validated" action="user_register.php" method="post" enctype="multipart/form-data">
				<div class="form-row">
					<div class="form-group col-sm-6">
						<label>First Name</label>
						<input type="text" name="fname" class="form-control" placeholder="First Name" required>
					</div>
					<div class="form-group col-sm-6">
						<label>Last Name</label>
						<input type="text" name="lname" class="form-control" placeholder="Last Name" required>
					</div>
				</div>
				<div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="eg:- abc@gmail.com" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control" placeholder="eg:- xxxxxxxxxx" required>
                </div>
                <div class="form-group">
                    <label>Developer Categories</label>
                    <select class="form-control" name="category" required>
                        <option selected="">Choose Category</option>
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
                    <input type="text" name="skills" class="form-control" placeholder="eg:- Python, Java, Javascript, Node.js" required>
                </div>

                <div class="form-row">
                    <div class="form-group col-sm-6">
                        <label>Country</label>
                        <select class="form-control" name="country" required>
                            <option selected="">Choose Country</option>
                            <option>India</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-6">
                       	<label>State</label>
                        <select class="form-control" name="state" required>
                            <option selected="">Choose State</option>
                            <option>New Delhi</option>
                            <option>Mumbai</option>
                            <option>Chennai</option>
                            <option>Kolkata</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label>Contact No.</label>
                    <input type="tel" name="contact" class="form-control" placeholder="eg:- 9999999999" required>
                </div>
                <div class="form-group">
                    <label>Choose Image</label>
                    <input type="file" name="img" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Add Bio</label>
                    <textarea name="bio" cols="30" rows="5" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <br><button type="submit" name="developer_signup" class="btn btn-success form-control rounded-0 shadow">Signup as Developer</button>
                </div>
			</form>
		</div>
		<!-- Developer Signup Form Ends Here -->


		<!-- Client Signup Form Starts Here -->
		<div id="client" style="display: none;">
			<form class="was-validated" action="user_register.php" method="post" enctype="multipart/form-data">
				<div class="form-row">
					<div class="form-group col-sm-6">
						<label>First Name</label>
						<input type="text" name="fname" class="form-control" placeholder="First Name">
					</div>
					<div class="form-group col-sm-6">
						<label>Last Name</label>
						<input type="text" name="lname" class="form-control" placeholder="Last Name">
					</div>
				</div>
				<div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="eg:- abc@gmail.com">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="eg:- xxxxxxxxxx">
                </div>

                 <div class="form-row">
                    <div class="form-group col-sm-6">
                        <label>Country</label>
                        <select class="form-control" name="country">
                            <option selected="">Choose Country</option>
                            <option>India</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-6">
                       	<label>State</label>
                        <select class="form-control" name="state">
                            <option selected="">Choose State</option>
                            <option>New Delhi</option>
                            <option>Mumbai</option>
                            <option>Chennai</option>
                            <option>Kolkata</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label>Choose Image</label>
                    <input type="file" name="img" class="form-control">
                </div>
                <div class="form-group">
                    <label>Contact No.</label>
                    <input type="tel" name="contact" class="form-control" placeholder="eg:- 9999999999">
                </div>
                <div class="form-group">
                    <br><button type="submit" name="client_signup" class="btn btn-success form-control rounded-0 shadow">Signup as client</button>
                </div>
			</form>
		</div>
		<!-- Client Signup Form Ends Here -->

	</div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#signup_developer').click(function(){
         	$('#btn-box').hide();
         	$('#developer').show();
        });
        $('#signup_client').click(function(){
         	$('#btn-box').hide();
         	$('#client').show();
        });
    });
</script>


<?php

	include("footer/footer.php");

?>


<?php

	if(isset($_POST['developer_signup']))

	 {
		$dev_fname = $_POST['fname'];

		$dev_lname = $_POST['lname'];

		$dev_email = $_POST['email'];

		$dev_password = $_POST['password'];

		$dev_category = $_POST['category'];

		$dev_skills = $_POST['skills'];

		$dev_country = $_POST['country'];

		$dev_state = $_POST['state'];

		$dev_contact = $_POST['contact'];

		$dev_bio = $_POST['bio'];

		 $tar="developer/developer_photos/";
         $target= $tar.basename($_FILES["img"]["name"]);
         $img_names='developer_photos/'.basename($_FILES["img"]["name"]);

		$dev_ip = getRealIpAddr();

		$check=mysqli_query($con,"select * from developers where email='$dev_email'");
		$run=mysqli_fetch_assoc($check);

		if(mysqli_num_rows($check)>0)
		{
			
			echo "<script>alert('email already exist please signup from different email')</script>";
			echo "<script>window.open('user_register.php','_self')</script>";
			

		}

		else
			{

				$insert_developer = "INSERT INTO `developers`(`fname`, `lname`, `email`, `password`, `categories`, `skills`, `country`, `state`, `contact`, `img`, `bio`, `ip`) VALUES ('$dev_fname','$dev_lname','$dev_email','$dev_password','$dev_category','$dev_skills','$dev_country','$dev_state','$dev_contact','$img_names','$dev_bio','$dev_ip')";

					$run_developer = mysqli_query($con, $insert_developer);

					move_uploaded_file($_FILES['img']['tmp_name'],$target);

					echo "<script>alert('Account Created Successfully..!')</script>";

					echo "<script>window.open('user_login.php','_self')</script>";
			}

	}


?>


<?php

	if(isset($_POST['client_signup']))
	{
		$client_fname = $_POST['fname'];

		$client_lname = $_POST['lname'];

		$client_email = $_POST['email'];

		$client_password = $_POST['password'];

		$client_country = $_POST['country'];

		$client_state = $_POST['state'];

		 $tar="client/client_photos/";

         
		 $tar="client/client_photos/";
         $target= $tar.basename($_FILES["img"]["name"]);
         $img_names='client_photos/'.basename($_FILES["img"]["name"]);
		$client_contact = $_POST['contact'];

		$client_ip = getRealIpAddr();

		$check=mysqli_query($con,"select * from client where email='$client_email'");
		$run=mysqli_fetch_assoc($check);

		if(mysqli_num_rows($check)>0)
		{
			
			echo "<script>alert('email already exist please signup from different email')</script>";
			echo "<script>window.open('user_register.php','_self')</script>";
			

		}

		else
		{

		 	$insert_client = "INSERT INTO `client`(`fname`, `lname`, `email`, `password`, `country`, `state`, `img`, `contact`, `ip`) VALUES ('$client_fname','$client_lname','$client_email','$client_password','$client_country','$client_state',' $img_names','$client_contact','$client_ip')";

		$run_client = mysqli_query($con, $insert_client);

		move_uploaded_file($_FILES['img']['tmp_name'],$target);

		echo "<script>alert('Account Created Successfully..!')</script>";

		echo "<script>window.open('user_login.php','_self')</script>";
	}
}

?>