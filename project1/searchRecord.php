<!DOCTYPE html>
<html>
<head>
 <title>Booking List</title>
 <style>
   body {
     font-family: Arial, sans-serif;
     background-color: #f4f4f4;
     margin: 0;
     padding: 0;
   }
   .container {
     width: 50%;
     margin: 50px auto;
     background-color: #fff;
     padding: 20px;
     border-radius: 8px;
     box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
   }
   h3 {
     color: #333;
     text-align: center;
   }
   form {
     text-align: center;
   }
   input[type="text"] {
     width: 70%;
     padding: 10px;
     margin-bottom: 10px;
     border: 1px solid #ccc;
     border-radius: 4px;
     box-sizing: border-box;
   }
   input[type="submit"] {
     background-color: #4CAF50;
     color: white;
     padding: 10px 20px;
     border: none;
     border-radius: 4px;
     cursor: pointer;
   }
   input[type="submit"]:hover {
     background-color: #45a049;
   }
   a {
     color: #4CAF50;
     text-decoration: none;
   }
   a:hover {
     text-decoration: underline;
   }
 </style>
</head>
<body>
 <div class="container">
   <h3>Booking List</h3>
   <form action="displayRecord.php" method="post">
     <label for="first_name">First Name:</label><br>
     <input id="first_name" name="First_name" type="text" size="30"><br><br>
     <input type="submit" name="Submit" value="Search">
   </form>
   <p><a href="adminMenu.php">Back to Main Menu</a></p>
 </div>
</body>
</html>
