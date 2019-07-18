
<?php



$conn=mysqli_connect("localhost","root","","selfit");
function skill($postskill,$jobDetails)
{
    $strbrk=explode(",",$postskill);
    //print_r($strbrk);
     foreach($strbrk as $skll)
     {
       $skill=$skll;
       check_for_developer($skill,$jobDetails);
       //echo" skill function run";
     }
}

$fetchjob="select * from jobs";
$result1=mysqli_query($conn,$fetchjob);
if(mysqli_num_rows($result1)>0)
 {
     while($jobrow=mysqli_fetch_assoc($result1))
     {
         $postskill=$jobrow['skills'];
        // print_r($postskill);
         $jobDetails=$jobrow;
         skill($postskill,$jobDetails);
     }
}







 function notify($message,$developer_id,$skill,$jobDetails,$dev_id)
 {
    global $conn;
    //print_r($dev_id);

    //echo $message.' '.$developer_id. ' '.$dev_id.' '.$skill;

     $job_category=$jobDetails['job_category'];
     $project_type=$jobDetails['project_type'];
     $apis=$jobDetails['apis'];
     $project_stage=$jobDetails['project_stage'];
     $description=$jobDetails['description'];
     $skills=$jobDetails['skills'];
     $budget=$jobDetails['budget'];
     $hire_developer=$jobDetails['hire_developer'];
     $sender_id=$jobDetails['email'];
     $recipient_id=$dev_id;

        $select_before_fetch="select * from notifications where recipient_id='$recipient_id' AND sender_id='$sender_id' AND job_category='$job_category' AND project_type='$project_type' AND skills='$skills'  AND hire_developer='$hire_developer' AND budget='$budget'";


                $select_result=mysqli_query($conn,$select_before_fetch);
                // $fetch_data=mysqli_fetch_assoc($select_result);

                 if(mysqli_num_rows($select_result)>0)
                 {

                     echo " Notification already sent.. To: ".$recipient_id."<br>";


                 }

                else
                  {
                      $ins="INSERT INTO notifications(recipient_id,sender_id,job_category,project_type,apis,project_stage,description,skills,hire_developer,budget)VALUES('$recipient_id','$sender_id','$job_category','$project_type','$apis','$project_stage','$description','$skills','$hire_developer','$budget')";
                     $conn=mysqli_connect("localhost","root","","selfit");
                      $ins_result=mysqli_query($conn,$ins);
                  }




 }

 function check($fetchskill, $developer_id,$skill,$jobDetails,$dev_id)
 {

    echo 'Job Skill : '. $skill;
     $break=explode(",",$fetchskill);
    // echo "User :".$skill;
     print_r($break);

     $break1=explode(",",$skill);
     //print_r($break1);
     foreach($break as $brk)
     {
        if($skill==$brk)
        {
            echo 'Developer Skill :'.$brk.' Developer Id : '.$developer_id.'<br>';
            echo ' Diff btwn: '. $developer_id.' && '.$dev_id.'<br>';
           $message="You have work";
           notify($message,$developer_id,$skill,$jobDetails,$dev_id);
        }
     }
 }

function check_for_developer($skill,$jobDetails)
{
    global $conn;

    // print_r($jobDetails);
    // exit;
    $select="select * from developers";
    $result=mysqli_query($conn,$select);
    if(mysqli_num_rows($result)>0)
     {

            while($row=mysqli_fetch_assoc($result))
            {
                $fetchskill=$row['skills'];
                //echo $fetchskill.'<br>';
                $user_id=$row['developer_id'];
                $dev_id=$row['email'];
                check($fetchskill, $user_id, $skill,$jobDetails,$dev_id);

            }
            //echo"check for developer".'<br>';
     }
}
// $result="SELECT * FROM developers WHERE skills LIKE '$project_skills%' OR `skills` LIKE '%$ex%'";
?>