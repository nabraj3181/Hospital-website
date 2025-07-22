<?php

include("connection.php");

if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $fphone=$_POST['fphone'];
    $email=$_POST['femail'];
    $text=$_POST['ftext'];
    

$query="INSERT INTO  contact VALUES(NULL,'$fname','$fphone','$email','$text')";
    
 $data= mysqli_query($conn,$query);


if(!$data)

{
    echo"<script>alert('Error in Submission!!!');</script>";
}
else{
    echo "<script>alert('form submitted')</script>";
    header('location:contact.php');
}
}

?>
