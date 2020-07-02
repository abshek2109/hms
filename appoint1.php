<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Appointment booking</title>
    <link rel="stylesheet" href="first.css">
    
</head>

<body>
    <?php
    session_start();

    echo "Hello ".$_SESSION["user"];
    ?>
    <div class="navbar">
        <img src="heart.png" id="heart">
        <div class="nav">
            <ul>
                <li>
                    <a href="first.html">Home</a>
                    <a href="services.html">Services</a>
                    <a href="doctors.php">Doctors</a>
                    <a href="contact.html">Contact Us</a>
                </li>
            </ul>
        </div>
        
    </div>
    <div class="text6">
    <div class="details">
        <h1><b>BOOK YOUR APPOINTMENT NOW</b></h1>
        <p><b>Give your proper details for booking an appointment.</b></p>
    <form action="appoint.php" method="post">
        Name:<input type="text" name="Name" placeholder="Enter your Name"><br><br>
        E-mail id:<input type="text" name="Email" placeholder="Enter your email id"><br><br>
        Phone no.: <input type="text" name="mobile" value="" placeholder="Enter your phone no."><br><br>
        Residential Address: <input type="text" name="Address" placeholder="Enter your address"><br><br>
        Age:<input type="text" name="Age" placeholder="Enter your age">
        Date of Birth: <input type="text" name="" placeholder="Enter DOB"><br> <br>
        Gender: <input type="radio" name="Gender" value="Male">Male
        <input type="radio" name="Gender">Female
        <input type="radio" name="Gender" value="">Other <br><br>
        Suffering From/Symptoms:<input type="text" name="symptoms" placeholder="Enter your text..."><br><br>

        Specialisation: <select name="spec" ID="Specialisation">
            <option value="Orthopedics">Orthopedics</option>
            <option value="Physician">Physician</option>
            <option value="Gynecology">Gynecology</option>
            <option value="Pediatrics">Pediatrics</option>
            <option value="Opthamology">Opthamology</option>
            <option value="Dermatology">Dermatology</option>
        </select>

        Doctor Name:<select class="Doctors" name="doc">
            <option value="Ajay">Dr.Ajay sankhe</option>
            <option value="Dhaval">Dr.Dhaval Dalal</option>
            <option value="Sudhir">Dr.Sudhir Singh</option>
            <option value="Singh">Dr.Singh</option>
            <option value="Kamal">Dr.Kamal</option>
            <option value="Choudary">Dr.Choudary</option>
        </select><br><br>

        Timing:<select class="Timing" name="timing">
            <option value="9t11a">9am to 11am</option>
            <option value="11t1p">11am to 1 pm</option>
            <option value="6t8p">6pm to 8 pm</option>

        </select>

        Day:<select class="Day of week" name="day">
            <option value="Sunday">Sunday</option>
            <option value="Monday">Monday</option>
            <option value="Tuesday">Tuesday</option>
            <option value="Wednesday">Wednesday</option>
            <option value="Thursay">Thursay</option>
            <option value="Friday">Friday</option>
            <option value="Saturday">Saturday</option>

        </select>

        Date:<input type="text" name="date" value=""><br><br>

        <input type="checkbox" name="" value="">I will be available on the given slot
        <p>*Book your slot and save your time</p>
        <button type="submit" name="submit" class="book1" id="submit">Submit</button>
    </form>
    </div>
</div>
</body>

</html>