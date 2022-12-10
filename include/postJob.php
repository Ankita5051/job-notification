<?php
include "connection.php";
$type=$_POST['type'];
$branch=$_POST['branch'];
$package=$_POST['package'];
$company=$_POST['company'];
$post=$_POST['post'];
$deadline=$_POST['deadline'];
$requirement=$_POST['requirement'];
$description=$_POST['description'];
$instruction=$_POST['instruction'];
$action=$_POST['action'];
$job_id=uniqid();
echo $job_id;
if($action=='1'){
    $sql="INSERT INTO jobs(job_id,type,branch,package,company,post,deadline,requirement,description) value('$job_id',$type,$branch,$package,'$company','$post',$deadline,'$requirement','$description')" ;

    $insert=mysqli_query($con,$sql);
    if($insert){
        $em="job posted";
        header("location:../adminPanel.php?error=$em");

    }
    else
    echo("error");

}


//echo $type.$branch;

?>