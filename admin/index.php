<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<title></title>
</head>
<body>

	<div class="jumbotron">
    <div class="container  w-50 bg-white px-5 py-5" id="cntnr">
        
        <h3 class="display-5 text-center text-muted">Admin Login</h3><br>

        <div id="logErr">
            <?php
            if(isset($_COOKIE['error'])) 
            {
                echo  $_COOKIE['error'] ;
            } 
           
            ?>
        </div>

        <div id="login_form">
            <form class="was-validated" action="login_process.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label><i class="fas fa-envelope text-success"></i>&nbspEmail Id:</label>
                    <input class="form-control rounded-0" type="email" name="email" placeholder="username or email" required>
                </div>
                <div class="form-group">
                    <label><i class="fas fa-lock text-danger"></i>&nbspPassword:</label>
                    <input class="form-control rounded-0" type="Password" name="pass" placeholder="xxxxxxxxxx" required>
                </div>
                <div class="custom-control custom-checkbox">
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="checkbox" class="custom-control-input" id="customControlValidation1">
                            <label class="custom-control-label" for="customControlValidation1">Remember Me</label>
                        </div>
                        <div class="col-sm-6">
                            <a href="javascript:void(0)" id="forgot_pass" class="float-sm-right text-danger"><b>Forgot Password</b></a>
                        </div>
                    </div>
                </div><br>
                <div class="form-group text-center mb-sm-4">
                    <button type="submit" name="login" class="btn btn-success w-50 rounded-0">Login</button>
                </div>
                
            </form>
        </div>

        <div id="forgot_form" style="display: none;">
            <h6 class="display-5 text-muted">Enter your Email-Id to get your Password</h6>
            <form class="was-validated" action="" method="post">
                <div class="form-group">
                    <label><i class="fas fa-envelope text-success"></i>&nbspEmail Id:</label>
                    <input class="form-control rounded-0" type="email" id="u_email" placeholder="username or email" required>
                </div>
                <div class="form-group text-center mb-sm-4">
                    <button type="submit" class="btn btn-success w-50 rounded-0">Send Email</button>
                </div>
            </form>
        </div>

    </div>
</div>

        <script type="text/javascript">
            $(document).ready(function(){
                $('#forgot_pass').click(function(){
                    $('#login_form').hide();
                    $('#forgot_form').show();
                });
            });
        </script>


        <script type="text/javascript">
            setInterval(function(){
                $('#logErr').hide();
            },2000);
        </script>

        <script type="text/javascript">
        	$(document).ready(function(){
        		$("button").mouseenter(function(){
        			$(this).addClass("shadow-lg");
        		});
        		$("button").mouseleave(function(){
        			$(this).removeClass("shadow-lg");
        		});
        	});
        </script>


        <script type="text/javascript">
        	$(document).ready(function(){
        		$("#cntnr").mouseenter(function(){
        			$(this).addClass("shadow-lg");
        		});
        		$("#cntnr").mouseleave(function(){
        			$(this).removeClass("shadow-lg");
        		});
        	});
        </script>


	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>

<!-- <?php
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
		 
		 // header('location: admindash.php');
	 }
 }

?> -->