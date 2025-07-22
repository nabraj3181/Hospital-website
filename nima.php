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
      <img src="image/Dr nima tamang.jpg" alt="image1"><br>

      <b>Dr.Nima tamang</b><br>
      <b>Specialization: Orthopaedics</b><br>
      <b>NMC:4283</b><br>
      <b>Days:Sunday,Tuesday</b><br>
      <b>Time:3:30PM-4:30PM</b><br>
    </div>



    <form class="appointment" action="appointment.php" method="post">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required><br>

      <label for="phone">Phone:</label>
      <input type="tel" id="phone" name="phone" required><br>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required><br>

      <label>Gender:</label>
      <div class="radio-group">
        <input type="radio" id="male" name="gender" value="male" required>
        <label for="male" style="font-weight: 500; padding-right: 30px;">Male</label>
        <input type="radio" id="female" name="gender" value="female" required>
        <label for="female" style="font-weight: 500;">Female</label><br>
      </div>
      <label for="name">Doctor's Name:</label>
      <input type="text" id="name" name="doctor" value="Dr.Nima Tamang" readonly><br>

      <label>Select Day:</label>
      <div class="radio-group">
        <input type="radio" id="sunday" name="day" value="sunday" required>
        <label for="sunday" style="font-weight: 500;padding-right: 30px;">Sunday</label>
        <input type="radio" id="tuesday" name="day" value="tuesday" required>
        <label for="tuesday" style="font-weight: 500;">Tuesday</label><br>
      </div>
      <label for="time">Time:</label>
      <select id="time" name="time" required>
        <option value="3:30-4:30">3:30-4:30</option><br>

      </select>





      <input type="submit" value="Submit" >
    </form>

  </section>
</body>

</html>