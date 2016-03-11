<!Doctype html>
<html>
<head>
	<title>DiagnosticsLab</title>
   <link rel="stylesheet" href="stylesheet.css" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <!-- <script src="js/util.js"></script> -->

</head>
<body class="padding">
   <header>
    <div class="logo">
        <img class="img" src="img/Icon.jpg">
        <h1 class="header">Diagnostics Lab</h1>
    </div>
    <div class="buttons">
        <a href="index.php">
        <button class="button">Logout</button>
    </a>
           <!--  <a href="signup.html">
                <button class="button secondary">Sign Up</button>
            </a> -->
        </div>
    </header>
    <section>
        <div class="runner">
        </div>
    </section>
    <section class="contents">
        <nav class="navigation">
            <ul>
                <li><a  href="tech-viewhome.php">Home</li>
                <li><a  href="Registernewpatient.php">Register New Patient</a></li>
                <li><a  href="viewTestResult.php">View Test Result</a></li>
                <li><a  href="entertestresult.php">Enter Test Result</a></li>
                <li><a  href="CreatingTestCase.php">Order New Test</a></li>
            </ul>
        </nav>
        <section class="techcontents">
            <!-- write the code here -->
            <form id="registerForm" method="post">
                <!-- <label class="inputField">PatientId</label><input type="text" class="inputBox" name="patient_id" placeholder="Patient Id"><br> -->
                <label class="inputField">Patient First Name</label><input type="text" class="inputBox" name="firstName" placeholder="Patient First Name"><br>
                <label class="inputField">Patient Last Name</label><input type="text" class="inputBox" name="lastName" placeholder="Patient Last Name"><br>
                <label class="inputField">Age</label><input type="text" class="inputBox" name="age" placeholder="Age"><br>
                <label class="inputField">Gender</label><input type="text" class="inputBox" name="gender" placeholder="Gender"><br>
                <label class="inputField">Address</label><input type="text" class="inputBox" name="address" placeholder="Address"><br>
                <label class="inputField">Doctor Referred By</label><input type="text" class="inputBox" name="referred_doctor" placeholder="Doctor Referred By"><br>
                <label class="inputField">Email ID</label><input type="text" class="inputBox" name="customerEmail" placeholder="Email ID"><br>
                <label class="inputField">Phone Number</label><input type="text" class="inputBox" name="phoneNumber" id="last" placeholder="Phone Number"><br>
                <div class="buttonContainer">
                    <button class="ripple button" id="reset">Reset</button>
                    <button class="ripple button" type="submit" name="submit">Create</button>
                </div>
            </form>


        </section>

    </section>
    <aside>

    </aside>
    <footer>
        <p>	Diagnostics Lab</p>
    </footer>
    <?php
    
    include("config.php");

    $submit = @$_POST["submit"];
    $patient_id = @$_POST["patient_id"];
    $firstName = @$_POST["firstName"];
    $lastName = @$_POST["lastName"];
    $age = @$_POST["age"];
    $gender = @$_POST["gender"];
    $address = @$_POST["address"];
    $referred_doctor = @$_POST["referred_doctor"];{}
    $customerEmail = @$_POST["customerEmail"];
    $phoneNumber = @$_POST["phoneNumber"];

    if(ISSET($patient_id) || ISSET($firstName) || ISSET($lastName) || ISSET($age) || ISSET($gender) || ISSET($address) || ISSET($referred_doctor) || ISSET($customerEmail) || ISSET($phoneNumber)){
        $sql = "INSERT INTO patient (`PATIENT_ID`, `FIRST_NAME`, `LAST_NAME`, `AGE`, `GENDER`, `ADDRESS`, `REFERRED_DOCTOR`, `PHONE_NUMBER`, `CUSTOMER_EMAIL`) VALUES (NULL, '$firstName', '$lastName', '$age', '$gender', '$address', '$referred_doctor', '$phoneNumber', '$customerEmail')";


       // echo $sql;
        if ($link->query($sql) == TRUE){
         //   echo "New record created successfully";
        echo '<script>alert(" The Paitent record got created now go to the order new test ") </script>';
        //header("location: login.php");
    } else {
        // "Error: " . $sql . "<br>" . $link->error;
    }
}

$link->close();  
?>
</body>
</html>