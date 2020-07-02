<!DOCTYPE html>
<html>

<head>
    <title>Appointment Schedule</title>
    <link rel="stylesheet" type="text/css" href="first.css">
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
                    <a href="contact.html">Contact Us</a>
                </li>
            </ul>
        </div>
        <button class="logout"><a href="logout.php">Logout</a></button>
    </div>
    <div class="">
        <h1>Patient Appointment Schedule</h1>
        <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT doc, timing, name, `date` FROM appointments";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table ><tr><th>Doctor</th><th>Timing</th><th>Name</th><th>Date</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" ."&nbsp&nbsp&nbsp". $row["doc"]. "</td><td>"."&nbsp" . $row["timing"]. "</td><td> " ."&nbsp". $row["name"]. "</td><td> " ."&nbsp". $row["date"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
    </div>
</body>

</html>