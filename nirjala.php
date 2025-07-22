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
      <img src="image/Dr nirjala shrestha.jpg" alt="image1"><br>

      <b>Dr.Nirjala Shrestha </b><br>
      <b>Specialization: Paediatrics Surgon</b><br>
      <b>NMC:4284</b><br>
      <b>Days:Thursday,wednesday</b><br>
      <b>Time:2:30PM-4:30PM</b><br>

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
      <input type="text" id="name" name="doctor" value="Dr.Nirjala Shrestha" readonly><br>

      <label>Select Day:</label>
      <div class="radio-group">
        <input type="radio" id="thursday" name="day" value="thursday" required>
        <label for="thursday" style="font-weight: 500;padding-right: 30px;">Thursday</label>
        <input type="radio" id="wednesday" name="day" value="wednesday" required>
        <label for="wednesday" style="font-weight: 500;">Wednesday</label><br>
      </div>
      <label for="time">Time:</label>
      <select id="time" name="time" required>
        <option value="2:30-3:30">2:30-3:30</option>
        <option value="3:30-4:30">3:30-4:30</option><br>

      </select>





      <input type="submit" value="Submit">
    </form>

  </section>
</body>

</html>