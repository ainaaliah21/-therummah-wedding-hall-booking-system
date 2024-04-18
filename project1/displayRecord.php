<!DOCTYPE html>
<html>
<head>
    <title>Display Record</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            cursor: pointer;
        }
        th:hover {
            background-color: #ddd;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        a {
            text-decoration: none;
            color: blue;
        }
        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #333;
        }
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Display Record</h1>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "therummah";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Escape special characters in a string
        $firstName = mysqli_real_escape_string($conn, $_POST['First_name']);

        // Create and execute query
        $sql = "SELECT * FROM booking WHERE b_firstName= '$firstName'";
        $result = $conn->query($sql);

        // Check if records were returned
        if ($result->num_rows > 0) {
            // Create a table to display the record
            echo 'Selected record as the following: <br><br>';
            echo '<table>';
            echo '<tr>
                    <th>No</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Package</th>
                    <th>Location</th>
                 </tr>';

            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row["b_ID"] . '</td>';
                echo '<td>' . $row["b_firstName"] . '</td>';
                echo '<td>' . $row["b_lastName"] . '</td>';
                echo '<td>' . $row["b_phoneNum"] . '</td>';
                echo '<td>' . $row["b_email"] . '</td>';
                echo '<td>' . $row["date"] . '</td>';
                echo '<td>' . $row["b_package"] . '</td>';
                echo '<td>' . $row["b_location"] . '</td>';
                echo '</tr>';
            }
            echo '</table>';
        } else {
            echo '<p>No record found</p>';
        }
    }

    // Close connection
    $conn->close();
    ?>
    
    <a href="adminMenu.php" class="back-link">Back to Main Menu</a>
</div>

</body>
</html>
