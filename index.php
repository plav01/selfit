<?php

	session_start();

	include("header/header.php");

	include("includes/dbcon.php");

	include("functions/functions.php");

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-success sticky-top clearfix">

	<div class="container">

		<a class="navbar-brand font-weight-bold" href="index.php" style="font-family: Bauhaus93;font-size: 25px;">Self-iT</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
  		</button>

		<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
		
		<form class="input-group w-50 mx-sm-5" action="results.php" method="get">
  			<input type="search" name="user_query" class="form-control border-right-0" placeholder="Search freelancers">
  			<div class="input-group-append">
    			<button class="btn input-group-text border-left-0" style="background-color: white;" type="submit" name="search"><i class="fas fa-search text-success"></i></button>
  			</div>
		</form>

		<ul class="navbar-nav ml-auto">
			
        <?php

          if(!isset($_SESSION['email']))
            {
              ?>
                    <li class='nav-item mx-sm-5'>
								      <a class='nav-link hvr' href='user_login.php'>LOG IN</a>
							      </li>
							      <li class='nav-item'>
								      <a class='nav-link hvr' href='user_register.php'>SIGN UP</a>
							      </li>

              <?php
            }
          else
            {
              ?>
                    <li class='nav-item dropdown active px-sm-3'>
                            <a class='nav-link dropdown-toggle' data-toggle='dropdown' href='#'><i class='fas fa-user-circle'></i>
                                    <?=$_SESSION['name']?>

                            </a>

                            <div class='dropdown-menu'>
                                <div class='container'>
                                <div class='row'>
                                
                                    <div class='col-sm'>
                                      <?php
                                      if($_SESSION['user_type']=='client'){
                                        ?>
                                      <a class='dropdown-item' href='client/client_account.php'><i class='far fa-user'></i>
                                      &nbspMy Account</a>
                                      <?php
                                    }
                                    else{
                                      ?>
                                      <a class='dropdown-item' href='developer/developer_account.php'><i class='far fa-user'></i>&nbspMy Account</a>
                                      <?php
                                    }
                                      ?>          
                                    </div>
                                        
                                    <div class='dropdown-divider'></div>   
                                    <div class='col-sm'>   
                                        <a class='dropdown-item' href='user_logout.php'><i class='fas fa-sign-out-alt'></i>&nbspLogout</a>
                                    </div>
                                    </div> 
                                </div>
                            </div>
                            </li>
                            <li class='nav-item mx-sm-5'>
                              <?php
                              if($_SESSION['user_type']=='client'){
                              ?>
                              <a class='btn btn-dark text-white rounded-0 shadow' href='post_job.php'><strong><blink>Post Job</blink></strong></a>
                              <?php
                            }
                            ?>
                            </li>

                 <?php
                }

              ?>
		</ul>
	</div>

	</div>

</nav>

	
	<div class="container-fluid shadow-lg bg-light mb-2">
		<ul class="nav justify-content-between">
  			<?php

  				getcategories();

  			?>
  			
  				<div class="dropleft py-1">
  					<button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&nbspCategories
  					</button>
  				<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
   					<a class="dropdown-item" href="seeallcategories.php">See All Categories</a>
  				</div>
				</div>	
		</ul>
	</div>


	<div class="container-fluid bgimg" style="height: 325px">
		<div class="container text-center">
			<h1 class="text-center text-light py-3" style="text-shadow: black 5px 5px 2px;">How it Works Watch Here</h1>
			<button class="btn btn-warning btn-lg text-white mt-4 shadow-lg" data-toggle="modal" data-target=".bd-example-modal-lg">
			<i class="fas fa-play-circle"></i>&nbspWatch Video
			</button>
		</div>

		<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  				<div class="modal-dialog modal-lg">
    			
				<div class="modal-content">

					<div class="modal-header">
        				<button type="button" class="close p-2 " data-dismiss="modal" aria-label="Close">
          					<span aria-hidden="true" >&times;</span>
        				</button>
      				</div>

					<iframe width="auto" height="450" src="https://www.youtube.com/embed/tgbNymZ7vqY">
					</iframe>
			
					<div class="modal-header">
      				</div>

    			</div>
  				</div>
		</div>
		
	</div>


	<!--Spinner Start-->
	<div class="container-fluid">
        <div class="mt-sm-2 bg-warning">
            <div class="row">
                <div class="col">
                    <div class="loader shadow"></div>
                </div>
                <div class="col">
                    <h3 class="text-muted float-right" style="margin: 13px">Ex-plore i-Developers</h3>
                </div>
            </div>
        </div>
    </div>
    <!--Spinner Close-->


	 <div class="container-fluid mt-2 shadow-lg bg-light mb-2">
		<div class="row">
			<div class="col-6">
				<h4 class="text-muted">Web Developers</h4>
			</div>
			<div class="col-6">
				<a href="#" class="btn btn-info float-right">View All</a>
			</div>
		</div>
		<div class="row px-2 py-3">
			
    		<?php

    			getDeveloper();

    		?>
    					
 		</div>
	</div>


  
	 <div class="jumbotron mt-sm-2">
		
			<div class="row">
				<div class="col-sm-2 mx-sm-5">
					<div class="card shadow-lg" style="width: 16rem;">
  						<div class="card-body text-center">
    						<p class="card-title"><i class="fas fa-laptop fa-5x"></i></p>
    						<a href="#" class="card-link mb-2 text-muted hvr">Web Developer</a>
  						</div>
					</div>
				</div>
				<div class="col-sm-2 mx-sm-5">
					<div class="card shadow-lg" style="width: 16rem;">
  						<div class="card-body text-center">
    						<p class="card-title"><i class="fas fa-mobile-alt fa-5x"></i></p>
    						<a href="#" class="card-link mb-2 text-muted">Mobile Developer</a>
  						</div>
					</div>
				</div>
				<div class="col-sm-2 mx-sm-5">
					<div class="card shadow-lg" style="width: 16rem;">
  						<div class="card-body text-center">
    						<p class="card-title"><i class="fas fa-desktop fa-5x"></i></p>
    						<a href="#" class="card-link mb-2 text-muted">Software Developer</a>
  						</div>
					</div>
				</div>
				<div class="col-sm-2 mx-sm-5">
					<div class="card shadow-lg" style="width: 16rem;">
  						<div class="card-body text-center">
    						<p class="card-title"><i class="fas fa-gamepad fa-5x"></i></p>
    						<a href="#" class="card-link mb-2 text-muted">Game Developer</a>
  						</div>
					</div>
				</div>
				


			</div>

			<div class="row mt-sm-5">
				<div class="col-2 mx-sm-5">
					<div class="card shadow-lg" style="width: 16rem;">
  						<div class="card-body text-center">
    						<p class="card-title"><i class="fas fa-laptop fa-5x"></i></p>
    						<a href="#" class="card-link mb-2 text-muted hvr">Web Developer</a>
  						</div>
					</div>
				</div>
				<div class="col-2 mx-sm-5">
					<div class="card shadow-lg" style="width: 16rem;">
  						<div class="card-body text-center">
    						<p class="card-title"><i class="fas fa-mobile-alt fa-5x"></i></p>
    						<a href="#" class="card-link mb-2 text-muted">Mobile Developer</a>
  						</div>
					</div>
				</div>
				<div class="col-2 mx-sm-5">
					<div class="card shadow-lg" style="width: 16rem;">
  						<div class="card-body text-center">
    						<p class="card-title"><i class="fas fa-desktop fa-5x"></i></p>
    						<a href="#" class="card-link mb-2 text-muted">Software Developer</a>
  						</div>
					</div>
				</div>
				<div class="col-2 mx-sm-5">
					<div class="card shadow-lg" style="width: 16rem;">
  						<div class="card-body text-center">
    						<p class="card-title"><i class="fas fa-gamepad fa-5x"></i></p>
    						<a href="#" class="card-link mb-2 text-muted">Game Developer</a>
  						</div>
					</div>
				</div>
				


			</div>
		
	</div>

  <script type="text/javascript">
    $(document).ready(function(){
      $("[href]").mouseenter(function(){
        $(this).addClass("text-primary");
      });
      $("[href]").mouseleave(function(){
        $(this).removeClass("text-primary");
      });
    });
  </script>
			


<?php
	
	include("footer/footer.php");

?>