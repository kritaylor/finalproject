<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

$name = $_POST['name'];
$email = $_POST['email'];
$comments = $_POST['comments'];

		if(!empty($name) && !empty($email) && !empty($comments)){
			
			include('connection.php');

			mysqli_query($dbc,"INSERT INTO contact(name,email, comments) VALUES('$name','$email', '$comments')");

			$registered = mysqli_affected_rows($dbc);
			
			echo "Thank you.  Submitted successfully!";
			
			}else{
		
			echo "ERROR: you left some values in blank!";
		}
			}else{

	echo "Please complete the form...";

}

?>

<!DOCTYPE html>
<html>
<body>
<input type="submit" value="Return to Peddler's" 
    onclick="window.location='http://localhost/assignment2/index2.html';" />   

 </body>
 </html>