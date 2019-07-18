<?php
 include('includes/dbcon.php');
 
 if(isset($_POST['login']))
 {
	 $username = $_POST['email'];
	 $password = $_POST['pass'];
	 
	 $qry = "SELECT * FROM `admin` WHERE `email`='$username' AND `password`='$password'";
	 
	 $run = mysqli_query($con,$qry);
	 
	 $row = mysqli_num_rows($run);
	 
	 if($row < 1)
	 {
		 ?>
		 <script>
		  alert('Username or Password not match...Please try again..!');
		  window.open('index.php','_self');
		 </script>
		 <?php
	 }
	 else
	 {
		 $data = mysqli_fetch_assoc($run);
		 
		 $id = $data['id'];
		 
		 $_SESSION['uid'] = $id;
		 
		 header('location: admindash.php');
	 }
 }

?>