<!DOCTYPE html>
<html>
<head>
    <title>Booking List</title>
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
        h1 {
            text-align: center;
        }
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .pagination a {
            color: #333;
            padding: 8px 16px;
            text-decoration: none;
            border: 1px solid #ddd;
            margin: 0 4px;
            border-radius: 4px;
        }
        .pagination a.active {
            background-color: #4CAF50;
            color: white;
            border: 1px solid #4CAF50;
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
        <h1>Booking List</h1>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "therummah"; // Change this to your database name

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Pagination
        $results_per_page = 10;
        if (!isset($_GET['page'])) {
            $page = 1;
        } else {
            $page = $_GET['page'];
        }
        $start_from = ($page - 1) * $results_per_page;

        // Sorting
        $sort = isset($_GET['sort']) ? $_GET['sort'] : 'b_ID';
        $sql = "SELECT * FROM booking ORDER BY $sort LIMIT $start_from, $results_per_page";

        $result = $conn->query($sql);

        // Check if records were returned
        if ($result->num_rows > 0) {
            // Create a table to display the record
            echo '<table>';
            echo '<tr>
                        <th><a href="?sort=b_ID">ID</a></th>
                        <th><a href="?sort=b_firstName">First Name</a></th>
                        <th><a href="?sort=b_lastName">Last Name</a></th>
                        <th><a href="?sort=b_phoneNum">Phone Number</a></th>
                        <th><a href="?sort=b_email">Email</a></th>
                        <th><a href="?sort=date">date</a></th>
                        <th><a href="?sort=b_package">Package</a></th>
                        <th><a href="?sort=b_location">Location</a></th>
                    </tr>';

            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>'.$row["b_ID"].'</td>';
                echo '<td>'.$row["b_firstName"].'</td>';
                echo '<td>'.$row["b_lastName"].'</td>';
                echo '<td>'.$row["b_phoneNum"].'</td>';
                echo '<td>'.$row["b_email"].'</td>';
                echo '<td>'.$row["date"].'</td>';
                echo '<td>'.$row["b_package"].'</td>';
                echo '<td>'.$row["b_location"].'</td>';
                echo '</tr>';
            }
        } else {
            echo "<tr><td colspan='7'>No results found</td></tr>"; // If no record found in the database
        }
        ?>
        </table>
        <div class="pagination">
            <?php
            // Pagination links
            $sql = "SELECT COUNT(b_ID) AS total FROM booking";
            $result_count = $conn->query($sql);
            $row_count = $result_count->fetch_assoc();
            $total_pages = ceil($row_count["total"] / $results_per_page);
            for ($i = 1; $i <= $total_pages; $i++) {
                echo "<a href='?page=$i'";
                if ($i == $page) echo " class='active'";
                echo ">$i</a>";
            }
            ?>
        </div>
        <a href="adminMenu.php" class="back-link">Back to Main Menu</a>
    </div>
</body>
</html>
