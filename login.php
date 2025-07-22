<?php
include("connection.php");
?>

<?php  

$username=$_POST['user'];
$password=$_POST['pass'];


$sql="select * from login where username='$username'and password='$password'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);




if($count==1)
{
    header("Location:http://localhost/DBMS%20Project/admin.php");

}


   else{
echo'<script>

window.location.href="loginform.php";
alert("Press OK to continue !!!");
</script>  $usernam;
echo $passwor';
  }
 ?> 
