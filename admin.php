<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
<style>
    .admin{
  width: 100%;
  position:sticky;
  height:50px;
  color:white;
  text-align: center;
  font-weight: bolder;
  background-color: #040b58;
  font-size:40px;
  padding-top:20px
}
.about{
    width:100%;
    height:60px;
    background-color:#c94848;
    display:flex;
    font-weight:bolder;
    font-size:30px;
    padding-top:17px;
    color:white;
    cursor:pointer;
}
.about a{
    text-decoration:none;
    color:white;
}

.adminview{
    background-color:#8bc428;
    text-align:center;
    font-size:40px;
    height:60%;
    padding-top:80px;
}
.adminview h1{
    font-size:60px;
}
</style>
</head>

<body>

    <div class="admin">
        WELCOME TO ADMIN PAGE
</div>
<div class="about">
    <div style="padding-right:800px;padding-left:60px;"><a href="http://localhost/DBMS%20Project/appoinmentdisplay.php">Appointments<a></div>
    <div><a href="http://localhost/DBMS%20Project/formdisplay.php" >Queries<a></div>
</div>


<div class="adminview">
    <h1>You Logged In as Admin !!! </h1><br>

    Click on appointments to view appointments registered !!!  <br>

    Click on queries to view queries registered !!!
</div>
</body>