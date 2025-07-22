

<?php

include("connection.php");


{
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $doctor=$_POST['doctor'];
    $day=$_POST['day'];
    $time=$_POST['time'];



    

$query="INSERT INTO  appointments VALUES(NULL,'$name','$phone','$email','$gender','$doctor','$day','$time')";
    
 $data= mysqli_query($conn,$query);


if(!$data)

{
    echo"<script>alert('Error in Submission!!!');</script>";
}
else{
    echo "<script>alert('form submitted')</script>";
    header('location:consultant.html');
}
}

?>
