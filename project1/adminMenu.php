<!DOCTYPE html>
<html>
<head>
 <title>Main Menu for Admin</title>
 <style>
   body 
   {font-family: "Raleway", sans-serif;
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

   {
     font-family: Arial, sans-serif;
     background-color: #f5f5f5;
   }
   .container {
     max-width: 400px;
     margin: 50px auto;
     background-color: #fff;
     padding: 20px;
     border-radius: 10px;
     box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
   }
   h1 {
     text-align: center;
   }
   .menu-item {
     margin-bottom: 15px;
   }
   .menu-item input[type="submit"] {
     width: 100%;
     padding: 10px;
     border: none;
     border-radius: 5px;
     background-color: #999966;
     color: white;
     cursor: pointer;
     transition: background-color 0.3s;
   }
   .menu-item input[type="submit"]:hover {
     background-color: #45a049;
   }
 </style>
</head>
<body>
  
<body text="#000000">

<marquee ALIGN="Top" DIRECTION="left" BGCOLOR="#996" WIDTH=2000 HEIGHT=30 LOOP="infinite" class="fonts">
<strong  width="1500" height="545" alt="">WELCOME!&nbsp;&nbsp;&nbsp;&nbsp; FULFILL &nbsp;&nbsp;&nbsp;&nbsp;YOUR&nbsp;&nbsp;&nbsp;&nbsp; WEDDING&nbsp;&nbsp;&nbsp;&nbsp; DREAM &nbsp;&nbsp;&nbsp;&nbsp;HERE&nbsp;&nbsp;&nbsp;&nbsp; WITH &nbsp;&nbsp;&nbsp;&nbsp;US&nbsp;&nbsp;&nbsp;&nbsp;NOW!</strong></marquee>

	<table width="1311" height="165" border="0">
  <tr>
    <th width="174" height="161" scope="col"><div align="left"><img src="img/logo.jpeg" width="172" height="159" alt="logo"></div></th>
    <th width="1127" scope="col"><div align="center"><span class="heading">T H E &nbsp; R U M M A H</span></div></th>
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
   <h1>Main Menu for Admin</h1>
   <div class="menu-item">
     <form action="booklist.php" method="post">
       <input type="submit" value="View Record" name="cmdView">
     </form>
   </div>
   <div class="menu-item">
     <form action="searchRecord.php" method="post">
       <input type="submit" value="Search Record" name="cmdSearch">
     </form>
   </div>
   <div class="menu-item">
     <form action="deleteList.php" method="post">
       <input type="submit" value="Delete Record" name="cmdDelete">
     </form>
   </div>
   <div class="menu-item">
     <form action="logout.php" method="post">
       <input type="submit" value="Log Out" name="cmdlogout">
     </form>
   </div>
 </div>
</body>
</html>
