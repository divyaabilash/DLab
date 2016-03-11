<!Doctype html>
<html>
<head>
    <title>DiagnosticsLab</title>
    <link rel="stylesheet" href="stylesheet.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php
    ob_start();
    include("config.php");
    session_start();
                    //$id = $_POST["id"];
                    //echo "coming here ";
                    $submit = @$_POST["submit"];
                    $userName = @$_POST["username"];
                    $password = @$_POST["password"];
                    $email = @$_POST["email"];
                    $phoneNumber = @$_POST["phonenumber"];
                    $userType = @$_POST["selection"];
                    if(ISSET($userName) || ISSET($password) || ISSET($email) || ISSET($phoneNumber))
                        {
                            // $sql = "select patient_id from PATIENT where USER_NAME = '$userName'";
                            $sql2 = "select patient_id from PATIENT where  CUSTOMER_EMAIL ='$email'";
                            $sql3 = "select patient_id from PATIENT where  PHONE_NUMBER = $phoneNumber";
                            $sql4 = "select id from USER where  USER_NAME = '$userName'";
                            // $result =  mysqli_query($link, $sql);
                            $result2 =  mysqli_query($link, $sql2);
                            $result3 =  mysqli_query($link, $sql3);
                            $result4 =  mysqli_query($link, $sql4);
                            // echo $result."Ramya\n";
                            // echo $sql;
                            // if($result->num_rows == 1){ 
                            //     echo " the user name already exsists ";
                            // } 
                            if($result2->num_rows == 1){
                                // echo " the email already exsists ";
                                // echo '<script>alert(" the email already exsists ") </script>';
                            } elseif ($result3->num_rows == 1) {
                                // echo "  ";
                                // echo '<script>alert(" the phonenumber already exsists ") </script>';
                            } elseif ($result4->num_rows == 1) {
                                // echo " the user name already exsists ";
                                // echo '<script>alert(" the user name already exsists  ") </script>';
                            } else {
                                $md5password = md5($password);
                                $sql ="select max(ID) `max` from USER";
                                
                                $result = mysqli_query($link,$sql);
                                $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                                
                                $id = intval($row['max']);
                                
                                $id = $id+1;
                                            
                                $sql = "INSERT INTO USER (ID, USER_TYPE, USER_NAME, PASSWORD, EMAIL, PHONE_NUMBER) VALUES ($id,'$userType','$userName','$md5password','$email',$phoneNumber)";
                                // $result = mysqli_query($link, $sql);
                                // echo "$result\n";
                                 // echo $sql;
                                if ($link->query($sql) === TRUE) {
                                    $_SESSION['USER_NAME'] = $userName;
                                    $_SESSION['USER_ID'] = $id;
                                    // echo "New record created successfully";
                                    // header("location: login.php");
                                   header("location: login.php");
                                } else {
                                    // echo "Error: " . $sql . "<br>" . $link->error;
                                }
                            }
                        }
?>
<body class="padding">
   <header>
    <div class="logo">
        <img class="img" src="img/Icon.jpg">
        <h1 class="header">Diagnostics Lab</h1>
    </div>
    <div class="buttons">

        <a href="login.php">
            <button class="button">Login</button>
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
        <section class="main">
            <div> Its Always good to stay connected and know whats happening inside you!</div>
        </section>
        <aside>
            <form method="post">
                <fieldset>
                    <div class="signlegend">
                        <!-- <div>
                            <div id="error" class="errortext"></div>
                            <label>Id<sup>*</sup>
                            <br>
                            <input type="text" name="id" id="id" placeholder="Enter Your Id " class="textbox" required /></label>
                        </div> -->
                        <div>
                            <label>Name<sup>*</sup>
                                <br>
                                <input type="text" name="name" id="name" placeholder="John" class="textbox" required /></label>
                            </div>
                            <div>
                                <label>User Name<sup>*</sup>
                                    <br>
                                    <input type="text" name="username" id="username" placeholder="username" class="textbox" required/></label>
                                </div>
                                <div>
                                    <label>Password<sup>*</sup>
                                        <br>
                                        <input type="password" name="password" id="password" placeholder="Password" class="textbox" required/>
                                    </label>
                                </div>
                                <div>
                                    <label>Confirm Password<sup>*</sup>
                                        <br>
                                        <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirmpassword" class="textbox" onblur="comparePassword()" required />
                                    </label>
                                </div>
                                <div>
                                    <label>Email ID<sup>*</sup>
                                        <br>
                                        <input type="email" name="email" id="email" placeholder="example@domain.com" class="textbox" required/></label>
                                    </div>
                                    <div>
                                        <label>Phone Number<sup>*</sup>
                                            <br>
                                            <input type="number" name="phonenumber" id="phonenumber" placeholder="xxx-xxx xxxx" class="textbox" required/></label>
                                        </div>
                                        <div>
                                            <input type="radio" name="selection" value="tech" id="techn">Tech</input>
                                            <input type="radio" name="selection" value="patient" id="r" checked>Patient</input>
                                        </div>
                                        <div>
                                            <button type="submit" onclick="getchecked()">Sign Up</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </aside>
                    </section>
                    <footer>
                    <p> Diagnostics Lab</p>
                    </footer>
                    <script type="text/javascript" src="js/lib.js"></script>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        </body>
</html>