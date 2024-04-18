<!DOCTYPE html>
<html>
<head>
 <title>Booking Form</title>
 <style>
   body {
     font-family: Arial, sans-serif;
     background-color: #f4f4f4;
   }
   form {
     max-width: 400px;
     margin: 0 auto;
     background-color: #fff;
     padding: 20px;
     border-radius: 8px;
     box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
   }
   input[type="text"] {
     width: calc(100% - 20px);
     padding: 10px;
     margin: 8px 0;
     border: 1px solid #ccc;
     border-radius: 4px;
   }
   input[type="submit"] {
     width: 100%;
     background-color: #4caf50;
     color: white;
     padding: 14px 20px;
     margin: 8px 0;
     border: none;
     border-radius: 4px;
     cursor: pointer;
   }
   input[type="submit"]:hover {
     background-color: #45a049;
   }
   .error-message {
     color: #ff0000;
     margin-top: 5px;
   }
 </style>
 <script>
   function validateForm() {
     var firstName = document.forms["bookingForm"]["First_Name"].value;
     if (firstName == "") {
       alert("First Name must be filled out");
       return false;
     }
   }
 </script>
</head>
<body>
 <form name="bookingForm" action="deleteRecord.php" method="post" onsubmit="return validateForm()">
   <h2>Booking Form</h2>
   <label for="First_Name">First Name:</label>
   <input type="text" id="First_Name" name="First_Name" size="30" required>
   <div class="error-message" id="first_name_error"></div>
   <input type="submit" name="submit" value="Submit">
 </form>
</body>
</html>
