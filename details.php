<?php

session_start();

include("includes/dbcon.php");

include("functions/functions.php");

include("header/header.php");

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-success sticky-top clearfix">

<div class="container">

	<a class="navbar-brand font-weight-bold" href="index.php" style="font-family: Bauhaus93;font-size: 25px;">Self-iT</a>

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	  </button>

	<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
	
	<form class="input-group w-50 mx-sm-5" action="#" method="get">
		  <input type="text" class="form-control border-right-0" placeholder="Search freelancers">
		  <div class="input-group-append">
			<button class="btn input-group-text border-left-0" style="background-color: white;" type="submit"><i class="fas fa-search text-success"></i></button>
		  </div>
	</form>

	<ul class="navbar-nav ml-auto">
		<?php

          if(!isset($_SESSION['email']))
            {
              echo "
                    <li class='nav-item mx-sm-5'>
								      <a class='nav-link hvr' href='user_login.php'>LOG IN</a>
							      </li>
							      <li class='nav-item'>
								      <a class='nav-link hvr' href='user_register.php'>SIGN UP</a>
							      </li>

                   ";
            }
          else
            {
              echo "
                    <li class='nav-item dropdown active px-sm-3'>
                            <a class='nav-link dropdown-toggle' data-toggle='dropdown' href='#'><i class='fas fa-user-circle'></i>
                                    ". $_SESSION['name']."
                            </a>
                            <div class='dropdown-menu'>
                                <div class='container'>
                                <div class='row'>
                                
                                    <div class='col-sm'>
                                    <a class='dropdown-item' href='customer/my_account.php'><i class='far fa-user'></i>&nbspMy Account</a>
                                    </div>
                                        
                                    <div class='dropdown-divider'></div>   
                                    <div class='col-sm'>   
                                        <a class='dropdown-item' href='user_logout.php'><i class='fas fa-sign-out-alt'></i>&nbspLogout</a>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            </li>

                  ";
                }

              ?>
	</ul>
</div>

</div>

</nav>

<div class="jumbotron jumbotron-fluid">
	<div class="container bg-white cntnr" id="details">
		<div class="row">
			<div class="col-sm-2 p-2">
				<img src="plav.jpg" class="img-thumbnail rounded-circle">
			</div>
			<div class="col-sm-4">
				<h2 class="text-muted mt-3">Pallav Raj</h2><br>
				<div class="row">
					<div class="col-3">
						<p><i class='fas fa-map-marker-alt text-danger'></i>&nbspIndia</p>
					</div>
					<div class="col-4">
						<p>New Delhi</p>
					</div>
				</div>
			</div>
			
				<div class="col-6 text-right">
					<p class="text-info p-3"><b>100%<br>Job Success</b></p>
					<a href="javascript:void(0)" class="btn btn-success btn-lg rounded-0" id="post_job">Post Job</a>
				</div>
			
		</div>
		<hr class="bg-primary">
		<div class="row">
			<div class="col">
				<h1>Pallav</h1>
			</div>
		</div>
	</div>

	<div class="container bg-white w-50 cntnr" id="job_form" style="display: none;">
		<div class="p-2">
			<h3 class="display-5 text-muted"><center>Fill as your requirements</center></h3>
			<form class="was-validated" action="" method="post">
                <div class="form-group">
                    <label><i class="fas fa-envelope text-success"></i>&nbspEmail Id:</label>
                    <input class="form-control rounded-0" type="email" id="u_email" placeholder="username or email" required>
                </div>
                <div class="form-group text-center mb-sm-4">
                    <button type="submit" class="btn btn-success w-50 rounded-0 shadow-lg">Send Email</button>
                </div>
            </form>
		</div>
	</div>

</div>



<script type="text/javascript">
	$(document).ready(function(){
		$(".cntnr").mouseenter(function(){
			$(this).addClass("shadow");
		});
		$(".cntnr").mouseleave(function(){
			$(this).removeClass("shadow");
		});
	});
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$("#post_job").click(function(){
			$("#details").hide();
			$("#job_form").show();
		});
	});
</script>

<?php

include("footer/footer.php");

?>
