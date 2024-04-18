<!DOCTYPE html PUBLIC "-//W3c//DTD XHTML 1.0 Transitiopnal//EN" "http://www.w3.org/TR/xhtml/DTD/xhtml-transitional.dtd">
<html xmlns="http:ww.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	<title>Your Place</title>
</head>

<body>

<?php
//extract ($_POST);

//connect to server
$connect = mysqli_connect("localhost", "root", "project1");

if (!$connect){
	die ('ERROR:'.mysqli_connect_error());
}

?>
</body>
</html>