<!DOCTYPE html>
<html>
<head>
	<title>Registration Form Self</title>
</head>
<body>

	<h1>Registration Form Self</h1>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">

		<label for="firstName">First Name</label>
		<input type="text" id="firstName" name="fname">

		<br>
		
		<label for="lastName">Last Name</label>
		<input type="text" id="lastName" name="lname">

		<br>

		<label for="pass">Password</label>
		<input type="password" id="pass" name="passw">

		<br>

		<input type="submit" value="Submit">

	</form>


	<?php 

		if($_SERVER['REQUEST_METHOD'] == "POST") {
		
        if (empty($_POST['fname']) && empty($_POST['lname'])) {
			echo "Fill UP From Properly";
		}
		else
		{
			$FirstName=$_POST['fname'];
	        $LastName=$_POST['lname'];
	         echo $FirstName . " ".$LastName;

		}
		}
	?>

</body>
</html>