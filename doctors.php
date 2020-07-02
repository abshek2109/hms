


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>doctors</title>
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
      <button class="logout"><a href="logout.php">Logout</a></button>
    </div>
    <div class="text1">
        <table>
            <tr>
                <td><h2>Specialisation</h2></td>
                <td><h2>Doctors</h2></td>
                <td><h2>Timings</h2></td>
                <td><h2>Fees</h2></td>
                <td><h2>Bookings</h2></td>
            </tr>
            
            <tr>
                <td>ORTHOPEDICS</td>
                <td>Dr.Ajay sankhe
                </td>
                <td>9am to 11am</td>
                <td>Rs.400</td>
                <td><button class="book"><a href="appoint1.php">Book</a></button></td>
            </tr>
            <tr>
                <td>PHYSICIAN</td>
                <td>Dr.Dhaval Dalal
                </td>
                <td>11am to 1pm</td>
                <td>Rs.200</td>
                <td><button class="book"><a href="appoint1.php">Book</a></button></td>
            </tr>
            <tr>
                <td>GYNECOLOGY</td>
                <td>Dr.Sudhir Singh
                </td>
                <td>6pm to 8pm</td>
                <td>Rs.500</td>
                <td><button class="book"><a href="appoint1.php">Book</a></button></td>
            </tr>
            <tr>
                <td>PEDIATRICS</td>
                <td>Dr.Singh
                </td>
                <td>6pm to 8pm</td>
                <td>Rs.800</td>
                <td><button class="book"><a href="appoint1.php">Book</a></button></td>
            </tr>
            <tr>
                <td>OPTHAMOLOGY</td>
                <td>Dr.Kamal
                </td>
                <td>6pm to 8pm</td>
                <td>Rs.350</td>
                <td><button class="book"><a href="appoint1.php">Book</a></button></td>
            </tr>
            <tr>
                <td>DERMATOLOGY</td>
                <td>Dr.Choudary
                </td>
                <td>6pm to 8pm</td>
                <td>Rs.400</td>
                <td><button class="book"><a href="appoint1.php">Book</a></button></td>
            </tr>


        </table>
        
    </div>
</body>
</html>