<!DOCTYPE html>
<html>
<head>
	<title>Edit doctor</title>
<meta http-equiv="Content Type" content="text/html; charset= utf-8"/>

</head>
<body>
<?php include ("header.php");?>
<div align="center">
	<h1>Edit Booking Details</h1>

<?php

	//look for a valid user id, either through GET or POST
	if ((isset($_GET['id'])) && (is_numeric($_GET['id']))) 
	{
		$id = $_GET['id'];
	}
	elseif ((isset($_POST['id'])) && (is_numeric($_POST['id'])))
	{
		$id = $_POST['id'];
	}
	else
	{
		echo '<p class ="error" This page has been accessed in error ></p>';
			exit();
	}

	if ($_SERVER['REQUEST_METHOD'] =='POST') 
	{
		$error = array();

		//look for FirstName
		if(empty($_POST['b_firstName']))
		{
			$error[] = 'You forgot to enter the first name.';
			echo '<script type="text/javascript">
                         alert("The user cannot be edited due to the system error, we apologise for the inconvenience");
                         location.replace("editBooking.php");
                             </script>';
		}
		else
		{
			$f = mysqli_real_escape_string($connect, trim($_POST['b_firstName']));
		}

		//look for lastName
		if(empty($_POST['b_lastName']))
		{
			$error[] = 'You forgot to enter the last name.';
		}
		else
		{
			$l = mysqli_real_escape_string($connect, trim($_POST['b_lastName']));
		}

		//look for phone number
		if(empty($_POST['b_phoneNum']))
		{
			$error[] = 'You forgot to enter the phone nuber.';
		}
		else
		{
			$pn = mysqli_real_escape_string($connect, trim($_POST['b_phoneNum']));
		}

		//look for Email Address
		if(empty($_POST['b_email']))
		{
			$error[] = 'You forgot to enter the Email Address.';
		}
		else
		{
			$e = mysqli_real_escape_string($connect, trim($_POST['b_email']));
		}

		//look for category
		if(empty($_POST['b_category']))
		{
			$error[] = 'You forgot to enter the Type of property.';

		}
		else
		{
			$c = mysqli_real_escape_string($connect, trim($_POST['b_category']));
		}

		//check for booking location
        if(empty($_POST['b_location']))
        {
           $error [] = 'You forgot to enter location.';
        }
        else 
        {
           $lc = mysqli_real_escape_string($connect, trim ($_POST['b_location']));
        }

		//look for deposit
		if(empty($_POST['b_deposit']))
		{
			$error[] = 'You forgot to enter the Deposit RM.';
		}
		else
		{
			$d = mysqli_real_escape_string($connect, trim($_POST['b_deposit']));
		}

		//look for payment
		if(empty($_POST['b_payment']))
		{
			$error[] = 'You forgot to enter the Payment RM.';
		}
		else
		{
			$pay = mysqli_real_escape_string($connect, trim($_POST['b_payment']));
		}

		//if no problem occured
		if (empty($error))
		{
			$q = "SELECT b_ID FROM booking WHERE b_email ='$e' AND b_ID != $id";

			$result = @mysqli_query($connect, $q);

			if (mysqli_num_rows($result) == 0)
			{
				$q = "UPDATE booking SET b_firstName='$f', b_lastName='$l', b_phoneNum='$pn', b_email='$e', b_category='$c', b_location='$lc', b_deposit='$d', b_payment='$pay' WHERE b_ID='$id' LIMIT 1";

				$result = @mysqli_query($connect,$q);

				if (mysqli_affected_rows($connect)==1) 
				{
					echo '<script type="text/javascript">
                         alert("The user has been edited");
                         location.replace("bookingList.php");
                             </script>';
				}
				else
				{
					echo '<script type="text/javascript">
                         alert("The user cannot be edited due to the system error, we apologise for the inconvenience");
                         location.replace("editBooking.php");
                             </script>';
				}
			}
			else
				{
					echo '<p class= "error"> The insurance number has already been registered!</p>';
				}
		}
				else
				{
					echo '<p class ="error"> The following error(s) occured: <br/> ';
					foreach ($error as $msg) 
					{
							echo "-$msg<br/> \n";
				}	
				echo '</p><p>Please try again.</p>';
				}
	}

	$q = "SELECT b_firstName, b_lastName, b_phoneNum, b_email, b_category, b_location, b_deposit, b_payment FROM booking WHERE b_ID = $id";
	$result = @mysqli_query($connect,$q);

	if (mysqli_num_rows($result)==1) 
	{
		//get doctor info
		$row = mysqli_fetch_array($result, MYSQLI_NUM);

		//create form
		echo '<form action ="update.php" method="post">

		<p><label class="label" for="b_firstName">First Name: </label>
		<input id = "b_firstName" type="text" name="b_firstName" size="30" maxlength="30" value="'.$row[0].'">

		<label class="label" for="b_lastName">Last Name: </label>
		<input id = "b_lastName" type="text" name="b_lastName" size="30" maxlength="30" value="'.$row[1].'"></p> 

		<p><label class="label" for="b_phoneNum">Phone Number: </label>
		<input id = "b_phoneNum" type="text" name="b_phoneNum" size="30" maxlength="30" value="'.$row[2].'">

		<label class="label" for="b_email">Email Address: </label>
		<input id = "b_email" type="text" name="b_email" size="30" maxlength="30" value="'.$row[3].'"></p>

		<p><label class="label" for="b_category">Type of Property: (residential/commercial/industrial)</label>
		<input id = "b_category" type="option" name="b_category" size="15" maxlength="30" value="'.$row[4].'">

		<label class="label" for="b_location">Location: </label>
		<input id = "b_location" type="text" name="b_location" size="15" maxlength="30" value="'.$row[5].'">

		<p><label class="label" for="b_deposit">Deposit: </label>
		<input id = "b_deposit" type="text" name="b_deposit" size="15" maxlength="30" value="'.$row[6].'">

		<label class="label" for="b_payment">Payment: </label>
		<input id = "b_payment" type="text" name="b_payment" size="15" maxlength="30" value="'.$row[7].'"></p>

		<br><p><input id="submit" type="submit" name="submit" value="Edit">
		<button><a href="bookingList.php" value="Return">Return</button></p>
		<br><input type="hidden" name="id" value="'.$id.'"/>


		</form>';
	}
	else
	{
		echo '<p class="error"> This page has been accessed in error.</p>';
	}

	mysqli_close($connect);
?></div>
</body>
</html>