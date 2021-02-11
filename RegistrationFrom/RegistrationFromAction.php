<!DOCTYPE html>
<html>
<head>
	<title>Registration Action</title>
</head>
<body>
	<h1>Registration Form Action</h1>
	<?php

	if($_SERVER['REQUEST_METHOD']=="POST"){

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