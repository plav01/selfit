<?php
    if(!isset($_SESSION))
    {
      session_start();
    }

    $conn=mysqli_connect("localhost","root","","selfit");
    $email=$_POST['u_email'];
    $password=$_POST['u_pass'];
    $codes = array('client','developers');
  //  print_r($codes);
    foreach($codes as $deco)
    {
      
       $select="select * from ".$deco." where email='$email' && password='$password'";
       $query=mysqli_query($conn,$select);
       if(mysqli_num_rows($query)>0)
        {
            $Q=mysqli_fetch_assoc($query);
            $_SESSION['email']=$email;
            $_SESSION['name']=$Q['fname'].' '.$Q['lname'];
            $_SESSION['user_type'] = $deco;
            if($deco=='client')
            {
                echo "<script>alert('Successfully logged-in')</script>";

                echo "<script>window.open('client/client_account.php','_self')</script>";
            }
            else
            {
                echo "<script>alert('Successfully logged-in')</script>";

                echo "<script>window.open('developer/developer_account.php','_self')</script>";
            }
            die;
        }
    }
    
    $cookie_name="error";
    $cookie_value="<p class='text-danger'><h4><b><u>Email Id and Password not match..!Please try again.</u></b></h4> </p>";
    setcookie($cookie_name, $cookie_value, time() + (5), "/");
    header('location:user_login.php');
    
?>