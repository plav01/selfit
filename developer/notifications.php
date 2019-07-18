<?php

	include("../includes/dbcon.php");

	// $c = $_SESSION['email'];

	$notiyselect = "SELECT * FROM notifications WHERE recipient_id='$user_session'";
	

?>