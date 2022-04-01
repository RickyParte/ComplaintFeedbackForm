<?php

    include ('connection.php');


if(isset($_POST['submitComplaint']))
{
    $fullName=$_POST['fullname'];
    $rollNo=$_POST['rollno'];
    $branch=$_POST['branch'];
    $mobile=$_POST['mobileno'];
    $email=$_POST['email'];
    $description=$_POST['describeissue'];
    date_default_timezone_set('Asia/Kolkata');
    $datetime=date('d-m-y H:i:s');

    $insertQuery="insert into feedback (name,rollnumber,branch,email,mobilenumber,description,datetime)  values
    ('$fullName','$rollNo','$branch','$email','$mobile','$description','$datetime')";
    $runQuery=mysqli_query($connection,$insertQuery);
    if($runQuery)
    {
        header("Location: index.php?message= Your Complaint is Submitted Successfully..!");
    }
    else{
        header("Location: index.php?message= Server is Down. Please Try Again!");
    }
    
}
else{
    header("Location: index.php?message= Getting Error From Server. Try After Sometime");
}

if(isset($_POST['viewComplaint']))
{
    header("Location: ViewComplaint.php");
}


?>