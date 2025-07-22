<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>service</title>

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .appointed {
            background-color: green;
            color: white;
        }
    </style>

<script>
        function changeButtonText(button) {
            if (button.innerHTML === "Appoint!!!") {
                button.innerHTML = "Appointed";
                button.classList.add("appointed");
            } else if (button.innerHTML === "Appointed") {
                button.innerHTML = "Appoint!!!";
                button.classList.remove("appointed");
            }
        }
    </script>
</head>

<body>
    <nav class="navBarA">
        <div class="logo">
            <img src="image/logo.png" alt="logo">
            <div class="icon">
                <p><i class="material-icons">home</i>New Baneshwor, Kathmandu</p>
                <p><i class="material-icons">phone</i>01-4795177</p>
                <p><i class="material-icons">mail</i>everesthospital@gmail.com</p>
            </div>
        </div>
    </nav>

    <nav class="navBarB">
        <ul class="navList">
            <li><a href="hospital.html">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="service.html">Services</a></li>
            <li><a href="Gallery.html">Gallery</a></li>
            <li><a href="Consultant.html">Consultants</a></li>
            <li><a href="http://localhost/DBMS%20Project/contact.php">Contacts</a></li>
        </ul>
    </nav>

    <section style="padding-bottom: 50px; padding-top: 20px;">
        <?php
            include("connection.php");
            $query = "SELECT * FROM appointments";
            $data = mysqli_query($conn, $query);

            $total = mysqli_num_rows($data);
            $result = mysqli_fetch_assoc($data);

            if ($total != 0) {
                echo '<h2 align="center"><mark>Appointments</mark></h2>';
                echo '<table>';
                echo '<tr>';
                echo '<th>Name</th>';
                echo '<th>Phone</th>';
                echo '<th>Email</th>';
                echo '<th>Gender</th>';
                echo '<th>Doctor\'s Name</th>';
                echo '<th>Day</th>';
                echo '<th>Time</th>';
                echo '<th>Appointment</th>';
                echo '</tr>';

                while ($result = mysqli_fetch_assoc($data)) {
                    echo '<tr>';
                    echo '<td>' . $result["name"] . '</td>';
                    echo '<td>' . $result["phone"] . '</td>';
                    echo '<td>' . $result["email"] . '</td>';
                    echo '<td>' . $result["gender"] . '</td>';
                    echo '<td>' . $result["doctor"] . '</td>';
                    echo '<td>' . $result["day"] . '</td>';
                    echo '<td>' . $result["time"] . '</td>';
                    echo '<td><button onclick="changeButtonText(this)">Appoint!!!</button></td>';
                    echo '</tr>';
                }
            }
        ?>
    </section>

    
</body>

</html>
