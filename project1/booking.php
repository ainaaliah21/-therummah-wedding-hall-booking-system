<!DOCTYPE html>
<html>
<head>
    <title>Booking Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /* Your CSS styles */

        body {
            font-family: "Raleway", sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #996;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover:not(.active) {
            background-color: #000;
            color: #FFF;
        }
        li a, .dropbtn {
          display: inline-block;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
        }


        .active {
            background-color: #999966;
        }

        .heading {
            font-size: 36px;
            font-family: "Times New Roman", Times, serif;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }

        .container h2 {
            text-align: center;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        .form-group input[type="text"],
        .form-group input[type="tel"],
        .form-group input[type="email"],
        .form-group select,
        .form-group input[type="date"] {
            width: calc(100% - 10px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .form-group input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            background-color: #996;
            color: white;
            font-weight: bold;
        }

        .form-group input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>

<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "therummah";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// If the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $phoneNum = $_POST['phoneNum'];
    $email = $_POST['email'];
    $package = $_POST['package'];
    $location = $_POST['location'];
    $date = $_POST['date']; // Added date field

    // Insert data into database
    $sql = "INSERT INTO booking (b_firstName, b_lastName, b_phoneNum, b_email, date, b_package, b_location) 
            VALUES ('$firstName', '$lastName', '$phoneNum', '$email', '$date', '$package', '$location')";

    if ($conn->query($sql) === TRUE) {
        // Display success message in a popup
        echo '<script>alert("Your form has been submitted successfully.");</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<body text="#000000">

<marquee ALIGN="Top" DIRECTION="left" BGCOLOR="#996" WIDTH=2000 HEIGHT=30 LOOP="infinite" class="fonts">
<strong  width="1500" height="545" alt="">WELCOME!&nbsp;&nbsp;&nbsp;&nbsp; FULFILL &nbsp;&nbsp;&nbsp;&nbsp;YOUR&nbsp;&nbsp;&nbsp;&nbsp; WEDDING&nbsp;&nbsp;&nbsp;&nbsp; DREAM &nbsp;&nbsp;&nbsp;&nbsp;HERE&nbsp;&nbsp;&nbsp;&nbsp; WITH &nbsp;&nbsp;&nbsp;&nbsp;US&nbsp;&nbsp;&nbsp;&nbsp;NOW!</strong></marquee>

<table width="1311" height="165" border="0">
  <tr>
    <th width="174" height="161" scope="col"><div align="left"><img src="img/logo.jpeg" width="172" height="159" alt="logo"></div></th>
    <th width="1127" scope="col"><div align="center"><span class="heading">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;T H E &nbsp; R U M M A H</span></div></th>
  </tr>
</table>
<ul>
  <li><a class="active" href="home.php">Home&nbsp;&nbsp;</a></li>
  <li><a href="weddingvenue.php">Wedding Venue&nbsp;&nbsp;</a></li>
  <li><a href="booking.php">Booking&nbsp;&nbsp;</a></li>
  <li><a href="gallery.php">Gallery&nbsp;&nbsp;</a></li>
  <li><a href="contact.php">Contact Us&nbsp;&nbsp;</a></li>
  <li><a href="login.html">StaffLogin&nbsp;&nbsp;</a></li>

</ul>

<div class="container">
    <h2>Booking Form</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <div class="form-group">
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" maxlength="30" required>
        </div>
        
        <div class="form-group">
            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" maxlength="30" required>
        </div>
        
        <div class="form-group">
            <label for="phoneNum">Phone Number:</label>
            <input type="tel" id="phoneNum" name="phoneNum" pattern="[0-9]{11}" required>
        </div>
        
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" maxlength="30" required>
        </div>
        
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required>
        </div>
        
  <div class="form-group">
            <label for="package">Package:</label>
            <select id="package" name="package" required>
                <option value="">Select a package</option>
                <option value="A">Package A</option>
                <option value="B">Package B</option>
                <option value="C">Package C</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="location">Location:</label>
            <select id="location" name="location" required>
                <option value="">Select a location</option>
                <option value="Glass House Seputeh">Glass House Seputeh</option>
                <option value="Villa Rimba Flora">Villa Rimba Flora</option>
                <option value="Arjuna">Arjuna</option>
                <option value="Rumah Abang Jamil KL">Rumah Abang Jamil KL</option>
            </select>
        </div>
        
        <div class="form-group">
            <input type="submit" value="Submit">
        </div>
    </form>
</div>

</body>
</html>
