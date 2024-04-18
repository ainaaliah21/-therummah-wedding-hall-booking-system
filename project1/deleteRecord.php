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
if(isset($_POST['submit'])) {
    // Check if 'First_Name' key exists in $_POST array
    if(isset($_POST['First_Name'])) {
        //get input value
        $adName = $_POST['First_Name'];
        
        // sql to delete a record
        $sql = "DELETE FROM booking WHERE b_firstName='$adName'";
        
        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    } else {
        echo "First Name is not provided.";
    }
} else {
    echo "Form is not submitted.";
}

// Close connection
$conn->close();

echo '<p><a href="adminMenu.php">Back to Main Menu</a></p>';
?>
