<?php 
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">

</head>

<body>
  <section style="display: flex;  ;">
    <div class="fsubmit">
        <img src="image/Dr janak joshi.jpg " alt="image1"><br>

      <b>Dr.Abasesh Bhandari</b><br>
      <b>Specialization: Gastroenterology</b><br>
      <b>NMC:4282</b><br>
      <b>Days:Sunday,Thursday,wednesday</b><br>
      <b>Time:2:30PM-4:30PM</b><br>
    </div>



    <form class="appointment" action="appointment.php" method="post">
      Name:
      <input type="text" id="name" name="name" required><br>

      Phone:
      <input type="tel" id="phone" name="phone" required><br>

      Email:
      <input type="email" id="email" name="email" required><br>

      Gender:
      <div class="radio-group">
        <input type="radio" id="male" name="gender" value="male" required>
        <label for="male" style="font-weight: 500; padding-right: 30px;">Male</label>
        <input type="radio" id="female" name="gender" value="female" required>
        <label for="female" style="font-weight: 500;">Female</label><br>
      </div>
      
      Doctor's Name:
      <input type="text" id="doctor" name="doctor" value="Dr.Abasesh Bhandari" readonly><br>

      Select Day:
      <div class="radio-group">
        <input type="radio" id="sunday" name="day" value="sunday" required>
        <label for="sunday" style="font-weight: 500;padding-right: 30px;">Sunday</label>
        <input type="radio" id="thursday" name="day" value="thursday" required>
        <label for="thursday" style="font-weight: 500;padding-right: 30px;">Thursday</label>
        <input type="radio" id="wednesday" name="day" value="wednesday" required>
        <label for="wednesday" style="font-weight: 500;">Wednesday</label><br>
      </div>
      Time:
      <select id="time" name="time" required>
        <option value="2:30-3:30">2:30-3:30</option>
        <option value="3:30-4:30">3:30-4:30</option>
        <br>

      </select>





      <input type="submit" value="Submit">
    </form>

  </section>
</body>

</html>