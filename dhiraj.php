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
      <img src="image/Dr dhiraj joshi.jpg " alt="image1"><br>

      <b>Dr.Dhiraj joshi</b><br>
      <b>Specialization: Radiologist</b><br>
      <b>NMC:4286</b><br>
      <b>Days:Thursday,tuesday,friday</b><br>
      <b>Time:1:30PM-4:30PM</b><br>
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
      <input type="text" id="name" name="doctor" value="Dr.Dhiraj Joshi" readonly><br>

      <label>Select Day:</label>
      <div class="radio-group">
        <input type="radio" id="thursday" name="day" value="thursday" required>
        <label for="thursday" style="font-weight: 500;padding-right: 30px;">Thursday</label>
        <input type="radio" id="friday" name="day" value="friday" required>
        <label for="friday" style="font-weight: 500;padding-right: 30px;">Friday</label>
        <input type="radio" id="tuesday" name="day" value="tuesday" required>
        <label for="tuesday" style="font-weight: 500;">Tuesday</label><br>
      </div>
      <label for="time">Time:</label>
      <select id="time" name="time" required>
        <option value="1:30-2:30">1:30-2:30</option>
        <option value="2:30-3:30">2:30-3:30</option>
        <option value="3:30-4:30">3:30-4:30</option><br>

      </select>





      <input type="submit" value="Submit">
    </form>

  </section>
</body>

</html>