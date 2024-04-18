<?php
session_start();

// Check if the user is logged in as admin
if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    header("Location: login.html"); // Redirect to login page if not logged in as admin
    exit;
}

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
    $booking_id = $_POST['booking_id'];
    $status = $_POST['status'];

    // Update booking status in the database
    $sql = "UPDATE booking SET status='$status' WHERE id=$booking_id";

    if ($conn->query($sql) === TRUE) {
        // Display success message in a popup
        echo '<script>alert("Booking status updated successfully.");</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Retrieve all bookings from the database
$sql = "SELECT * FROM booking";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <!-- Your CSS styles -->
</head>
<body>
    <!-- Admin panel -->
    <div class="admin-panel">
        <h2>Admin Panel</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Package</th>
                <th>Location</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['b_firstName'] . "</td>";
                    echo "<td>" . $row['b_lastName'] . "</td>";
                    echo "<td>" . $row['b_phoneNum'] . "</td>";
                    echo "<td>" . $row['b_email'] . "</td>";
                    echo "<td>" . $row['b_package'] . "</td>";
                    echo "<td>" . $row['b_location'] . "</td>";
                    echo "<td>" . $row['status'] . "</td>";
                    echo "<td>";
                    echo "<form action='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "' method='POST'>";
                    echo "<input type='hidden' name='booking_id' value='" . $row['id'] . "'>";
                    echo "<select name='status'>";
                    echo "<option value='Confirmed'>Confirmed</option>";
                    echo "<option value='Cancelled'>Cancelled</option>";
                    echo "</select>";
                    echo "<input type='submit' value='Update'>";
                    echo "</form>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='9'>No bookings found</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>

<?php
// Close database connection
$conn->close();
?>
