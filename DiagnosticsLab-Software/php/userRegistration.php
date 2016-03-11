 <html>
 <body>
 	<?php
 	$servername = "localhost";
 	$username = "root";
 	$password = "";
 	$db = "labtest";

 	$link = mysqli_connect($servername, $username, $password,$db); 

 	if (!$link) { 
 		$output = 'Unable to connect to the database server.'; 
 		exit(); 
 	} else {
 		echo "<p> Connected successfully to </p> ";
 	}

 	$id = $_POST["id"];
 	$userName = $_POST["username"];
 	$password = $_POST["password"];
 	$email = $_POST["email"];
 	$phoneNumber = $_POST["phonenumber"];

 	// echo $id ;
 	// echo $userName;
 	// echo $password ;
 	// echo $email;
 	// echo $phoneNumber ;

 	$sql = "INSERT INTO USER (ID, USER_TYPE, USER_NAME, PASSWORD, EMAIL, PHONE_NUMBER) VALUES ($id,'patient','$userName','$password','$email',$phoneNumber)";

 	echo $sql;

 	if ($link->query($sql) === TRUE) {
 		echo "New record created successfully";
 	} else {
 		echo "Error: " . $sql . "<br>" . $conn->error;
 	}

 	$link->close();
 	?>
 </body>
 </html>

 



 