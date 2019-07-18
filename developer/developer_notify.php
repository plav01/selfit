<?php


 $conn=mysqli_connect("localhost","root","","selfit");
$user_session= $_SESSION['email'];
  $fetch_job="select * from notifications where recipient_id='$user_session'";
    $job_result=mysqli_query($conn,$fetch_job);

       $search=mysqli_num_rows($job_result);
          if(($search)>0)

          {
            while ($rows=mysqli_fetch_assoc($job_result))
             {
              # code...
            
            //print_r($job_result);
            
            $sender_id=$rows['sender_id'];
            echo'sender id'.$sender_id;

            
            $job_category=$search['job_category'];
            $project_type=$search['project_type'];  
            $apis=$search['apis'];
            $project_stage=$search['project_stage'];  
            $description  =$search['description'];
            $skills=$search['skills'];
            $hire_developer=$search['hire_developer'];  
            $budget=$search['budget'];
          }

             
  

           



          }
            
?>

<main role="main" class="ml-sm-auto px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h3 class="h4"><small>January 1, 2014&nbsp&nbsp</small>Job Posted by <strong class="text-primary">Pallav Raj</strong></h3>
  </div>

  <div class="row">
    <div class="col-7">
      <h4 class="pb-3 mb-4 font-italic border-bottom">
            Web Development
      </h4>
      <div class="row">
        <div class="col-6">
          <label><strong>Project Type</strong></label>
          <p>On Going Project</p>
        </div>
        <div class="col-6">
          <label><strong>APIs</strong></label>
          <p>Payment Process</p>
        </div>
      </div>

      <div class="row">
        <div class="col-6">
          <label><strong>Project Stage</strong></label>
          <p>I have specifications</p>
        </div>
        <div class="col-6">
          <label><strong>Hire Developer</strong></label>
          <p>Intermediate</p>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <label><strong>Descriptions</strong></label>
          <p>I want all functionality as good  as possible</p>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <label><strong>Skills</strong></label>
          <p>php,css,javascript,node</p>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <label><strong>Budget</strong></label>
          <p>Rs 20000/-</p>
        </div>
      </div>
          
        </main>
        <hr>