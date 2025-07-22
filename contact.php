
<?php 
include("connection.php");
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>service</title>

</head>

<body>
    <nav class="navBarA">
        <div class="logo">
            <img src="logo.png" alt="logo">

            <div class="icon">
                <p><i class="material-icons">home</i>New Baneshwor,Kathmandu</p>
                <p><i class="material-icons">phone</i>01-4795177</p>
                <p><i class="material-icons">mail</i>everesthospital@gmail.com</p>
            </div>
        </div>


    </nav>

    <nav class="navBarB">
        <ul class="navList">
            <li><a href="hospital.html">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="service.html">Services</a>
            <li><a href="Gallery.html">Gallery</a></li>
            <li><a href="Consultant.html">Consultants</a>
            <li><a href="contact.php">Contacts</a></li>
    </nav>

    <div>

        <section class="callus">
            <div class="headcall">
                <p>We Will Be Happy To Assist</p>
                <h1>CONTACT US TO <br>FIND OUT MORE</h1>
            </div>
            <div class="call">
                <div>
                    <h2>Address</h2><br>
                    <p>New baneswor,Kathmandu,Nepal
                    </p>
                </div>
                <div>
                    <h2>Phone-Number</h2><br>
                    <p><span>&#9742</span>01-4912042</p>
                </div>
                <div>
                    <h2>E-mail</h2><br>
                    <p><span>&#9993</span>everesthospital@gmail.com<br>
                    </p>
                </div>
                <div>
                    <h2>Opening Hours</h2><br>
                    <p>Sunday – Friday: 10am – 5pm </p>
                </div>
        </section>

        <div class="map">


        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.9351960320237!2d85.33099832462702!3d27.688397726328493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19bde2c25d5f%3A0x37ae7cb25dbf5b89!2sEverest%20Hospital%2C%20New%20Baneshwor%20Rd%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1686570595673!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>


        <section class="contactUs">
            <h1 class="text-center">Write Us And We'll Get Back To You</h1>
            <form class="form" action="contact1.php" name="myForm" method="post">
                <div id="name">
                    <input class="form-input" type="text" name="fname" placeholder="Enter your name" required>
                </div>
                <div id="phone">
                    <input class="form-input" type="text" name="fphone" pattern="\d+"
                        placeholder="Enter your phone number" required>
                </div>
                <div id="email">
                    <input class="form-input" type="email" name="femail" placeholder="Enter your email" required>
                </div>
                <div id="text">
                    <textarea class="form-input" name="ftext" cols="30" rows="5" placeholder="Elaborate your concern"
                        required></textarea>
                </div>
                <input type="submit"  value="submit "name="submit" class="button-dark">


            </form>
        </section>





    </div>









    <section class="sites">
        <div class="text3">
            <h3>About Everest Hospital</h3>
            <hr>
            <p>We at Everest Hospital are dedicated to providing<br> best possible health care at affordable prices.</p>
            <a href="####"><i class="material-icons">facebook</i></a>

        </div>

        <div class="text3">
            <h3>Departments</h3>
            <hr>
            <p> > Surgery & Radiology<br>
                > OPD<br>
                > Women’s Health<br>
                > Neuro<br>
                > Pediatrics<br>
                > Radiology</p>
        </div>
        <div class="text3">
            <h3>Latest News</h3>
            <hr>
            <p> > Test<br>
                > Preparing for a test web<br>
                > Understanding your healthcare options<br>
                > 5 tips for staying healthy during cold and<br> flu season<br>
                > Managing chronic conditions</p>
        </div>
        <div class="text3">
            <h3>Contact Us</h3>
            <hr>
            <p> <i class="material-icons">home</i>New Baneshwor, Kathmandu<br>
                <i class="material-icons">phone</i>01-4795177<br>
                <i class="material-icons">mail</i>everesthospital@gmail.com
            </p>
        </div>

    </section>
</body>

</html>


</body>

</html>