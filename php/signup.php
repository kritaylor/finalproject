<!DOCTYPE html>
<html>
<head>
<body>	 

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

$name = $_POST['name'];
$email = $_POST['email'];

		if(!empty($name) && !empty($email)){
			
			include('connection.php');

			mysqli_query($dbc,"INSERT INTO signup(name,email) VALUES('$name','$email')");

			$registered = mysqli_affected_rows($dbc);
			

			echo "Thank you.  Submitted successfully!";


			
			}else{
		
			echo "ERROR: you left some values in blank!";
		}
			}else{

	echo "Please complete the form...";

}


?>

</body>
</html>





