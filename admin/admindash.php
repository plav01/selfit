<?php
  session_start();
  
  if(isset($_SESSION['uid']))
  {
	 "";
  }
  else
  {
	  header('location: index.php');
  }
?>

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

	<!--Content for Headbar Start -->
	<nav class="navbar navbar-expand-sm navbar-dark bg-secondary sticky-top">
		<div class="container">
			<a class="navbar-brand" href="index.php"><h3>Admin Panel&nbsp<i class="fas fa-cog fa-spin"></i></h3></a>
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"><i class="fas fa-user-circle fa-2x"></i></a>
					<div class="dropdown-menu">
						<div class="container">
							<div class="row">
								<div class="col-sm-12 dropdown-item">
									<a class='btn btn-danger' href='logout.php'><i class='fas fa-sign-out-alt'></i>&nbspLogout</a>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
		</div>
	</nav>
	<!--Content for Headbar Close-->

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-2 bg-light">
				<div class="list-group" id="list-tab" role="tablist">
                    
					<h4 class="list-group-item list-group-item-action border-0 bg-info text-light">Dashboard&nbsp<i class="fa fa-wrench fa-spin text-light"></i></h4><hr>

      				<a class="border-0 list-group-item list-group-item-action bg-info text-light" href="index.php?insert_product">Insert New Product</a>

      				<a class="border-0 list-group-item list-group-item-action bg-info text-light" href="index.php?view_products">View All Products</a>

      				<a class="border-0 list-group-item list-group-item-action bg-info text-light" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab">Insert New Category</a>

      				<a class="border-0 list-group-item list-group-item-action bg-info text-light" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab">View All Categories</a>

      				<a class="border-0 list-group-item list-group-item-action bg-info text-light" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab">Insert New Brand</a>

      				<a class="border-0 list-group-item list-group-item-action bg-info text-light" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab">View All Brand</a>

      				<a class="border-0 list-group-item list-group-item-action bg-info text-light" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab">View Customers</a>

      				<a class="border-0 list-group-item list-group-item-action bg-info text-light" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab">View Orders</a>

      				<a class="border-0 list-group-item list-group-item-action bg-info text-light" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab">View Payments</a>

    			</div>
			</div>
			<div class="col-sm-10 bg-light">
				<?php
					include("includes/dbcon.php");
					if(isset($_GET['insert_product']))
					{
						include("insert_product.php");
					}

                    if(isset($_GET['view_products']))
                    {
                        include("view_products.php");
                    }
				?>
			</div>
		</div>
	</div>

	
	<!--Footer-->
    <div class="container-fluid mt-3 bg-secondary">
        <div class="container text-light text-left">
            <br>
        </div>
        <div class="text-center text-light p-sm-1"><p><b>© 2017-2018 Self-iT.com</b></p></div>
    </div>	


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>