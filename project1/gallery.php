<!DOCTYPE html>
<html>
<title>Gallery</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<head>
<style>
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

.active {
  background-color: #999966;
}
.heading {
  font-size: 36px;
  font-family: "Times New Roman", Times, serif;
}
.w3-center {
  background-color: #FFF;
}
.register {
  background-color: #996;
  color: #FFF;
}
.header {
  background-image: url(Pictures/header.jpg);
}
</style>

<!-- dropdown for staff-->
<style>
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

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: black;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: #996;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}

* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  text-align: center;
  padding: 32px;
}

.row {
  display: -ms-flexbox; /* IE 10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE 10 */
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create two equal columns that sits next to each other */
.column {
  -ms-flex: 50%; /* IE 10 */
  flex: 50%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 10px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
  font-size: 18px;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
</style>

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

<!-- Header -->
<div class="header" id="myHeader">
  <h1>Gallery</h1>
  <p>Click on the buttons to change the grid view.</p>
  <button class="btn" onclick="one()">1</button>
  <button class="btn active" onclick="two()">2</button>
  <button class="btn" onclick="four()">4</button>
</div>

<!-- Photo Grid -->
<div class="row"> 
  <div class="column">
    <img src="img/glass1.jpg" style="width:100%">
    <img src="img/glass2.jpg" style="width:100%">
    <img src="img/RAJ2.jpg" style="width:100%">
    <img src="img/RAJ3.jpg" style="width:100%">
    <img src="img/VILLA2.jpg" style="width:100%">
    <img src="img/VILLA3.jpg" style="width:100%">
    <img src="img/GLASS4.jpg" style="width:100%">
  </div>
  <div class="column">
    <img src="img/GLASS3.jpeg" style="width:100%">
    <img src="img/arjuna1.jpg" style="width:100%">
    <img src="img/GLASS5.jpeg" style="width:100%">
    <img src="img/RAJ1.jpg" style="width:100%">
    <img src="img/VILLA1.jpg" style="width:100%">
    <img src="img/VILLA3.jpg" style="width:100%">
  </div>  
  <div class="column">
    <img src="img/glass1.jpg" style="width:100%">
    <img src="img/glass2.jpg" style="width:100%">
    <img src="img/RAJ2.jpg" style="width:100%">
    <img src="img/RAJ3.jpg" style="width:100%">
    <img src="img/VILLA2.jpg" style="width:100%">
    <img src="img/VILLA3.jpg" style="width:100%">
    <img src="img/GLASS4.jpg" style="width:100%">
  <div class="column">
    <img src="img/GLASS3.jpeg" style="width:100%">
    <img src="img/arjuna1.jpg" style="width:100%">
    <img src="img/GLASS5.jpeg" style="width:100%">
    <img src="img/RAJ1.jpg" style="width:100%">
    <img src="img/VILLA1.jpg" style="width:100%">
    <img src="img/VILLA3.jpg" style="width:100%">
  </div>
</div>

<script>
// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;

// Full-width images
function one() {
    for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "100%";  // IE10
    elements[i].style.flex = "100%";
  }
}

// Two images side by side
function two() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "50%";  // IE10
    elements[i].style.flex = "50%";
  }
}

// Four images side by side
function four() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "25%";  // IE10
    elements[i].style.flex = "25%";
  }
}

// Add active class to the current button (highlight it)
var header = document.getElementById("myHeader");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>



</body>
</html>
