<?php
	
    session_start();

	include("header/header.php");

	include("../includes/dbcon.php");

	include("../functions/functions.php");

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-success sticky-top">

	<div class="container">

		<a class="navbar-brand font-weight-bold" href="../index.php" style="font-family: Bauhaus93;font-size: 25px;">Self-iT</a>

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
                                      <a class='dropdown-item' href='developer/developer_account.php'><i class='far fa-user'></i></a>
                                      <?php
                                    }
                                      ?>          
                                    </div>
                                        
                                    <div class='dropdown-divider'></div>   
                                    <div class='col-sm'>   
                                        <a class='dropdown-item' href='../user_logout.php'><i class='fas fa-sign-out-alt'></i>&nbspLogout</a>
                                    </div>
                                    </div> 
                                </div>
                            </div>
                        </li>
		</ul>
	</div>

	</div>

</nav>


<div class="container-fluid bg-light">
    <div class="container shadow-lg bg-white">
        <div class="row mt-sm-1 mb-sm-1">

            <div class="col-sm-3 bg-light">
                <div class="list-group" id="list-tab" role="tablist">
                    
                    <a class="border-0 list-group-item list-group-item-action bg-secondary text-light" href="change_pic.php">
                        
                        <?php

                        $user_session = $_SESSION['email'];

                        $get_client_pic = "select * from client where email='$user_session'";

                        $run_client = mysqli_query($con, $get_client_pic);

                        $row_client = mysqli_fetch_array($run_client);

                        $client_pic = $row_client['img'];

                        $client_fname = $row_client['fname'];

                        $client_lname = $row_client['lname'];

                        echo "

                        <img class='img-thumbnail img-fluid rounded-circle' src='$client_pic'

                        <p><b>$client_fname&nbsp$client_lname</b></p>

                        ";

                        ?>
                        
                    </a>

                    <a class="border-0 list-group-item list-group-item-action bg-secondary text-light" href="#"><i class="fas fa-briefcase"></i>&nbsp&nbspJOBS
                        <span class="badge badge-pill badge-primary">11</span>
                    </a>

                    <a class="border-0 list-group-item list-group-item-action bg-secondary text-light" href="#"><i class="far fa-comment-alt"></i>&nbsp&nbspMessages
                        <span class="badge badge-pill badge-primary">21</span>
                    </a>

                    <a class="border-0 list-group-item list-group-item-action bg-secondary text-light" href="#"><i class="fas fa-wallet"></i>&nbsp&nbspWallet</a>

                    <div class="dropdown">

                        <a class="border-0 list-group-item list-group-item-action bg-secondary text-light dropdown-toggle" data-toggle="dropdown" href="#"><i class="fas fa-cog"></i>&nbsp&nbspSettings</a>   

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="client_account.php?edit_account">Edit Account</a>
                            <a class="dropdown-item" href="client_account.php?change_pass">Change Password</a>
                            <a class="dropdown-item" href="client_account.php?delete_account">Delete Account</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm-9 bg-light">
                
                <?php

                    if(isset($_GET['notification']))
                    {
                        include("notification.php");
                    }
                    if(isset($_GET['edit_account']))
                    {
                        include("edit_account.php");
                    }
                    if(isset($_GET['change_pass']))
                    {
                        include("change_pass.php");
                    }
                    if(isset($_GET['delete_account']))
                    {
                        include("delete_account.php");
                    }
                ?>              
            </div>
        </div>
    </div>
    </div>



<?php

	include("footer/footer.php");

?>