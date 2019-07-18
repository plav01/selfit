<?php

    @session_start();

    include("header/header.php");

    include("includes/dbcon.php");

    include("functions/functions.php");

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-success sticky-top clearfix">

    <div class="container">

        <a class="navbar-brand font-weight-bold" href="index.php" style="font-family: Bauhaus93;font-size: 25px;">Self-iT</a>

    </div>

</nav>

<div class="jumbotron jumbotron-fluid">
    <div class="container  w-50 shadow-lg bg-white px-5 py-5">
        
        <h3 class="display-5 text-center text-muted">Log in and get to work</h3><br>

        <div id="logErr">
            <?php
            if(isset($_COOKIE['error'])) 
            {
                echo  $_COOKIE['error'] ;
            } 
           
            ?>
        </div>

        <div id="login_form">
            <form class="was-validated" action="loginProcess.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label><i class="fas fa-envelope text-success"></i>&nbspEmail Id:</label>
                    <input class="form-control rounded-0" type="email" name="u_email" placeholder="username or email" required>
                </div>
                <div class="form-group">
                    <label><i class="fas fa-lock text-danger"></i>&nbspPassword:</label>
                    <input class="form-control rounded-0" type="Password" name="u_pass" placeholder="xxxxxxxxxx" required>
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
                    <button type="submit" name="u_login" class="btn btn-success w-50 rounded-0 shadow-lg">Login</button>
                </div>
                <hr style="background-color:darkgrey;">
            
                <div class="form-group text-center mt-sm-4">
                    <a href="user_register.php" class="btn btn-primary w-50 rounded-0 shadow-lg">New to IT-hub? SignUp</a>
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
                    <button type="submit" class="btn btn-success w-50 rounded-0 shadow-lg">Send Email</button>
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


<?php

    include("footer/footer.php");

?>



