<?php 
include("connection.php");
$id=$_GET['Id'];
$query="DELETE FROM contact WHERE Id='$id'";
$data=mysqli_query($conn,$query);
if($data)

{ echo"<script>alert('Record Deleted!!!! ')</script>";


   ?>

              <meta http-equiv="refresh" content="0; URL=http://localhost/DBMS%20Project/formdisplay.php" />
 
 <?php 
}
else{
    echo"<script>alert('error ')</script>";
}


?>