<!Doctype html>
<html>

<head>
    <title>DiagnosticsLab</title>
    <link rel="stylesheet" href="stylesheet.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body class="padding">
 <header>
        <div class="logo">
            <img class="img" src="img/Icon.jpg">
            <h1 class="header">Diagnostics Lab</h1>
        </div>
        <div class="buttons">
        <a href="signup.php">
            <button class="button">Sign Up</button>
        </a>
            <a href="index.php">
                <button class="button secondary">Home</button>
            </a>
        </div>
    </header>
    <section>
        <div class="runner">
        </div>
    </section>
    <section class="signup">
        <section class="login">
            <form action="login.php" method="post">
                <fieldset>
                    <div  class="loginfield">
                        <div id="error" class="errortext"></div>
                        <div> 
                            <label>UserName<sup>*</sup>
                                <input type="text" name="Name" placeholder="UserName" required>
                            </label>
                        </div>
                        <div>
                            <label>Password<sup>*</sup>
                            <input type="password" name="password" placeholder="Password" required>
                            </label>
                        </div>
                        <button class="button" type="submit">Login</button>
                        <div>
                        <a href="">Forgot Password?</a></div>
                        </div>

                </fieldset>
            </form>
        </section>
        <aside class="main">
            <div> Its Always good to stay connected and know whats happening inside you!</div>
            
        </aside> 
    </section>
    <footer>
        <p> Diagnostics Lab</p>
    </footer>

    <script type="text/javascript" src="js/lib.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <?php
    include("config.php");
    session_start();
    $name = @$_POST["Name"];
 	$password = @$_POST["password"];

 	echo $name;
 	echo $password ;
 	echo "\n";

    //echo "<script>alert($_SESSION['USER_NAME'])</script>";
    echo $_SESSION["USER_NAME"];

 	if(ISSET($_POST["Name"]) && ISSET($_POST["password"]))
 	{
 	$sql = "SELECT USER_TYPE,PASSWORD FROM USER where USER_NAME = '$name' " ;

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
 			$md5Password = md5($password);

 			if( $dbPassword ==  $md5Password){
 				echo "\n password match";
 				// add to session not implemented
 				// session_register($name);
 				// $_SESSION['login_user']=$name;

 				if($row["USER_TYPE"] == "patient")
	 			{

                    $_SESSION['USER_NAME_LOGIN']=$name;
                    // $_SESSION['USER_ID_LOGIN'] = $row["ID"];

                    // $sql = "SELECT P.PATIENT_ID from PATIENT P JOIN USER U on P.PATIENT_ID=U.ID";
                    $_SESSION['PATIENT_ID'] = 1;
	 				header("location: patientDashboard.php"); 
	 			}	
	 			// elseif ($row['USER_TYPE'] == "tech")
                else
	 			{
                    // $_SESSION['USER_NAME_LOGIN'] = $userName;
                    // $_SESSION['USER_ID_LOGIN'] = $id;
                    // $sql = "SELECT P.PATIENT_ID from PATIENT P JOIN USER U on P.PATIENT_ID=U.ID";
                    // $_SESSION["TECH_ID"] = 3;
	 				header("location: tech-viewhome.php");
	 			}
 			}
 			else{ 
 				echo "\n password mismatch";
 				$error="Your Login Name or Password is invalid";
 				echo '<script>alert("Wrong Password, Please try again")</script>';
 				header("location: login.php"); 
 			}

 		}
 	} else {
 		echo "0 results";
 		$error="Your Login Name or Password is invalid";
 		header("location: login.php");
 	}
 	$link->close();
 }
 
 	?>
    
</body>

</html>
