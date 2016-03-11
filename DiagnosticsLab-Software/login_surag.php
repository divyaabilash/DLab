 <html>
 <body>
 	<?php
 	session_start();
 	$servername = "localhost";
 	$username = "root";
 	$password = "";
 	$db = "labtest";

 	$link = mysqli_connect($servername, $username, $password,$db); 

 	if (!$link) { 
 		$output = 'Unable to connect to the database server.'; 
 		exit(); 
 	} else {
 		echo "<p>// Connected successfully</p> ";
 	}

 	$name = $_POST["Name"];
 	$password = $_POST["password"];

 	echo $name;
 	echo $password ;
 	echo "\n";



 	$sql = "SELECT PASSWORD FROM USER where USER_NAME = '$name' " ;
 	echo $sql;
 	$result =  mysqli_query($link, $sql);
//echo $result;
 	if ($result->num_rows == 1) {
// output data of each row
 		while($row = $result->fetch_assoc()) {
 			echo "password: " . $row["PASSWORD"]. "<br>";
//echo $row["PASSWORD"];
 			$dbPassword = $row["PASSWORD"];
 			echo "db password";
 			echo $dbPassword;


 			if( $dbPassword ==  $password){
 				echo "\n password match";
 				// add to session not implemented
 				// session_register($name);
 				// $_SESSION['login_user']=$name;

 				header("location: patientDashboard.html"); 
 			}
 			else{
 				echo "\n password mismatch";
 				$error="Your Login Name or Password is invalid";

 				header("location: login.html"); 
 			}

 		}
 	} else {
 		echo "0 results";
 		$error="Your Login Name or Password is invalid";
 		header("location: patientDashboard.html");
 	}
 	$link->close();
 	?>

 </body>
 </html>





