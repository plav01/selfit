<?php

    session_start();

    include("header/header.php");

    include("functions/functions.php");

    include("includes/dbcon.php");

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
                              <a class='btn btn-primary text-white rounded-0' href='post_job.php'><strong>Post Job</strong></a>
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

<div class="jumbotron jumbotron-fluid">
    <div class="container bg-white p-3 w-50 cntnr">
        <h3 class="display-5 text-center text-info">Description of Job Requirements</h3><br>
        <form action="" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label><strong>Job Categories</strong></label>
                <select class="form-control" name="job_category" required>
                <option value="">Choose Category</option>
                    <?php

                        $get_cats = "SELECT * FROM categories";
                        $run_cats = mysqli_query($con,$get_cats);

                        while($row_cats=mysqli_fetch_assoc($run_cats))
                        {

                            $cat_title = $row_cats['cat_title'];

                            echo "<option value='$cat_title'>$cat_title</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label><strong>Project Details</strong></label>
                <div class="row">
                    <div class="col-6">
                        <select class="form-control" name="project_type" required>
                        <option value="">Select Type of Project</option>
                        <option value="One Time Project">One Time Project</option>
                        <option value="On Going Project">On Going Project</option>
                        <option value="I am not sure">I am not sure</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <select class="form-control" name="apis" required>
                        <option value="">Need to Integrate with any APIs?</option>
                        <option value="Payment Processor">Payment Processor</option>
                        <option value="Cloud Storage">Cloud Storage</option>
                        <option value="Social Media">Social Media</option>
                        <option value="Other APIs">Other APIs</option>
                        </select>
                    </div>

                </div>
            </div>
            <div class="form-group">
                <label><strong>What stage is the Project in?</strong></label>
                    <select class="form-control" name="project_stage" required>
                        <option value="">Choose</option>
                        <option value="I have specifications">I have specifications</option>
                        <option value="I have designs">I have designs</option>
                        <option value="I just have a concept">I just have a concept</option>
                    </select>
            </div>
            <div class="form-group">
                <label><strong>Job Description</strong></label>
                <textarea name="description" cols="40" rows="5" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <label><strong>What Skills you want in your Project?</strong></label>
                <input type="text" name="project_skills" class="form-control" placeholder="eg:- Python, Java, Javascript, Node.js" required>
            </div>

            <div class="form-group">
                <label><strong>Hire Developer</strong></label>
                <select class="form-control" name="hire_developer" required>
                    <option value="">Choose Developer Stage</option>
                    <option value="Beginner">Beginner</option>
                    <option value="Intermediate">Intermediate</option>
                    <option value="Expert">Expert</option>
                </select>
            </div>


            <div class="form-group">
                <label><strong>Budget</strong></label>
                <input type="number" name="budget" class="form-control" placeholder="" required>
            </div>


            <div class="form-group">
                <br><button type="submit" name="post_job" class="btn btn-success form-control rounded-0">Post Job</button>
            </div>
        </form>
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

<?php

    include("footer/footer.php");

?>

<?php

    if(isset($_POST['post_job']))
    {
        $job_category = $_POST['job_category'];

        $project_type = $_POST['project_type'];

        $apis = $_POST['apis'];

        $project_stage = $_POST['project_stage'];

        $description = $_POST['description'];

        $project_skills = $_POST['project_skills'];

        $hire_developer = $_POST['hire_developer'];

        $budget = $_POST['budget'];

        $ip = getRealIpAddr();

       $email=$_SESSION['email'];

        $insert_job = "INSERT INTO `jobs`(`job_category`, `project_type`, `apis`, `project_stage`, `description`, `skills`, `hire_developer`, `budget`, `ip`,`email`) VALUES ('$job_category','$project_type','$apis','$project_stage','$description','$project_skills','$hire_developer','$budget','$ip','$email')";

        $run_job = mysqli_query($con,$insert_job);

        echo "<script>alert('Job Posted Successfully..!')</script>";

        echo "<script>window.open('index.php','_self')</script>";
    }

?>