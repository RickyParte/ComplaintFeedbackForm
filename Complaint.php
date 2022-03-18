<?php

include ('Connection.php');

$fullName=$_POST['fullname'];
$rollNo=$_POST['rollno'];
$branch=$_POST['branch'];
$mobile=$_POST['mobileno'];
$email=$_POST['email'];
$description=$_POST['describeissue'];

if(isset($_POST['submitComplaint']))
{
    $insertQuery="insert into feedback  values ('$fullName','$rollNo','$branch','$email','$mobile','$description')";
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