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

        .answered {
            background-color: green;
            color: white;
        }
    </style>

    <script>
        function changeButtonText(button) {
            if (button.innerHTML === "Answer ??") {
                button.innerHTML = "Answered";
                button.classList.add("answered");
            } else if (button.innerHTML === "Answered") {
                button.innerHTML = "Answer ??";
                button.classList.remove("answered");
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
        $query = "select * from contact";
        $data = mysqli_query($conn, $query);

        $total = mysqli_num_rows($data);
        $result = mysqli_fetch_assoc($data);

        if ($total != 0) {
            ?>
            <h2 align="center"><mark>Submitted Queries</mark></h2>
            <center>
                <table border="1" cellpadding="0" width="60%" cellspacing="7">
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>

                    <?php
                    while ($result = mysqli_fetch_assoc($data)) {
                        echo "<tr>";
                        echo "<td>" . $result["name"] . "</td>";
                        echo "<td>" . $result["phone"] . "</td>";
                        echo "<td>" . $result["email"] . "</td>";
                        echo "<td>" . $result["message"] . "</td>";
                        echo "<td><button onclick='changeButtonText(this)' class='appoint-button'>Answer ??</button></td>";
                        echo "</tr>";
                    }
                    ?>
                </table>
            </center>
        <?php } ?>
    </section>

    <section class="sites">
        <div class="text3">
            <h3>About Everest Hospital</h3>
            <hr>
            <p>We at Everest Hospital are dedicated to providing<br>best possible health care at affordable prices.</p>
            <a href="####"><i class="material-icons">facebook</i></a>
        </div>

        <div class="text3">
            <h3>Departments</h3>
            <hr>
            <p>> Surgery & Radiology<br>
                > OPD<br>
                > Women’s Health<br>
                > Neuro<br>
                > Pediatrics<br>
                > Radiology</p>
        </div>

        <div class="text3">
            <h3>Latest News</h3>
            <hr>
            <p>> Test<br>
                > Preparing for a test web<br>
                > Understanding your healthcare options<br>
                > 5 tips for staying healthy during cold and<br> flu season<br>
                > Managing chronic conditions</p>
        </div>

        <div class="text3">
            <h3>Contact Us</h3>
            <hr>
            <p>
                <i class="material-icons">home</i>New Baneshwor, Kathmandu<br>
                <i class="material-icons">phone</i>01-4795177<br>
                <i class="material-icons">mail</i>everesthospital@gmail.com
            </p>
        </div>
    </section>
</body>

</html>
