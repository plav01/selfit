<?php

	$db = mysqli_connect("localhost","root","","selfit");


/*This function is used to show customer IP address*/
//function for getting the IP address
	
function getRealIpAddr()
	{
		if(!empty($_SERVER['HTTP_CLIENT_IP']))
	//check ip from share internet
	{
		$ip=$_SERVER['HTTP_CLIENT_IP'];
	}
	elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
	//to check ip is pass from proxy
	{
		$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
	}
	else
	{
		$ip=$_SERVER['REMOTE_ADDR'];
	}
	return $ip;
	}


	/*This function is used for categories list*/
	function getcategories()
	{
		global $db;
		$get_cats = "SELECT * FROM categories";
		$run_cats = mysqli_query($db,$get_cats);

		while($row_cats=mysqli_fetch_assoc($run_cats))
		{
			$cat_id = $row_cats['cat_id'];
			$cat_title = $row_cats['cat_title'];

			echo "
				<li class='nav-item'>
    				<a href='index.php?cat_id=$cat_id' class='text-muted nav-link ee'>$cat_title</a>
  				</li>
			";
		}
	}


	function getDeveloper()
	{
		global $db;

		if(!isset($_GET['cat_id']))
		{
			$get_developer = "select * from developers order by rand() LIMIT 0,4";

			$run_developer = mysqli_query($db, $get_developer);

			while($row_developer = mysqli_fetch_assoc($run_developer))
			{
				$dev_id = $row_developer['developer_id'];

				$dev_fname = $row_developer['fname'];

				$dev_lname = $row_developer['lname'];

				$dev_categories = $row_developer['categories'];

				$dev_country = $row_developer['country'];

				$dev_state = $row_developer['state'];

				$dev_skills = $row_developer['skills'];

				$dev_img = $row_developer['img'];

				echo "

					<div class='col-sm-3'>
					<div class='card shadow-lg rounded border-info' style='width: 18rem;'>
						<div class='row px-2 py-2'>
							<div class='col-sm-6'>
  								<img class='card-img-top rounded-circle' src='developer/$dev_img' alt='Card image cap'>
  							</div>
  							<div class='col-6'>
  								<h6 class='card-title text-success'>$dev_fname&nbsp$dev_lname</h6>
  								<p class='card-title'>$dev_categories</p>
  							</div>
  						</div>
  							<div class='card-body'>
  								<div class='row'>
  									<div class='col-sm-6'>
  										<p><i class='fas fa-map-marker-alt text-danger'></i>&nbsp<b>$dev_country</b></p>
  									</div>
  									<div class='col-sm-6'>
  										<p><b>$dev_state</b></p>
  									</div>
  								</div>
    							<label><b>Top Skills</b></label>
    							<p class='card-text' style='height:80px;'>$dev_skills</p>
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

				";
			}
		}
	}

?>