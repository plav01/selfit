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
		
		<form class="input-group w-50 mx-sm-5" action="" method="get">
  			<input type="search" name="user_query" class="form-control border-right-0" placeholder="Search freelancers">
  			<div class="input-group-append">
    			<button class="btn input-group-text border-left-0" style="background-color: white;" type="submit" name="search"><i class="fas fa-search text-success"></i></button>
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
                                <div class='col-sm dropdown-item'><b><center>Your Account</center></b></div>
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

<div class="container-fluid bg-light">
    <h2 class="text-light bg-info mt-sm-3">Search Results</h2>
    <div class="row">

    <?php

    if(isset($_GET['search']))
    {
        $user_keyword = $_GET['user_query'];

        $get_developer = "SELECT * FROM `developers` WHERE `fname` LIKE '$user_keyword%' OR `skills` LIKE '%$user_keyword%' ";

        $run_developer = mysqli_query($con,$get_developer);

        while($row_developer=mysqli_fetch_assoc($run_developer))
        {
        $dev_id = $row_developer['developer_id'];

        $dev_fname = $row_developer['fname'];

        $dev_lname = $row_developer['lname'];

        $dev_categories = $row_developer['categories'];

        $dev_country = $row_developer['country'];

        $dev_state = $row_developer['state'];

        $dev_skills = $row_developer['skills'];

        $dev_img = $row_developer['img'];
        
        ?>

            <div class='col-sm-3 mb-sm-3 mt-sm-3'>
                    <div class='card rounded border-info' style='width: 18rem;'>
                        <div class='row px-2 py-2'>
                            <div class='col-sm-6'>
                                <img class='card-img-top rounded-circle' src='<?=$dev_img?>' alt='Card image cap'>
                            </div>
                            <div class='col-6'>
                                <h6 class='card-title text-success'><?=$dev_fname?>&nbsp<?=$dev_lname?></h6>
                                <p class='card-title'><?=$dev_categories?></p>
                            </div>
                        </div>
                            <div class='card-body'>
                                <div class='row'>
                                    <div class='col-sm-6'>
                                        <p><i class='fas fa-map-marker-alt text-danger'></i>&nbsp<b><?=$dev_country?></b></p>
                                    </div>
                                    <div class='col-sm-6'>
                                        <p><b><?=$dev_state?></b></p>
                                    </div>
                                </div>
                                <label><b>Top Skills</b></label>
                                <p class='card-text' style='height:80px;'><?=$dev_skills?></p>
                            <div class='row'>
                                <div class='col-6'>
                                    <a href='details.php' class='btn btn-success'>View Profile</a>
                                </div>
                                <div class='col-6'>
                                    <a href='#' class='btn btn-info'>Post Job</a>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
        <?php
        }
    }

    ?>
</div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $(".card").mouseenter(function(){
        $(this).addClass("shadow-lg");
    });
        $(".card").mouseleave(function(){
        $(this).removeClass("shadow-lg");
        });
    });
</script>


<?php

	include("footer/footer.php");

?>