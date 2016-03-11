<!Doctype html>
<html>

<head>
    <title>DiagnosticsLab</title>
    <link rel="stylesheet" href="stylesheet.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="js/util.js"></script>
        <script src="js/jquery-2.2.1.min.js"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
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
                <li><a href="tech-viewhome.php">Home</li>
                <li><a href="Registernewpatient.php">Register New Patient</a></li>
                <li><a href="viewTestResult.php">View Test Result</a></li>
                <li><a href="entertestresult.php">Enter Test Result</a></li>
                <li><a href="CreatingTestCase.php">Order New Test</a></li>
            </ul>
        </nav>
        <section class="techcontents">
            <div id="error" class="errortext"></div>

                <div class="paitentInfo">
                    <label>Patient ID:<sup>*</sup>
                        <input id="patientID" placeholder="xxxxxx" required>
                    </label>
                    <button class="search" id="search" type ="submit" onclick="clicked()"><i class="fa fa-search fa-2x"></i></button>
                </div>

                    <div id="layouthidden">
                        <div class="tableDiv">
                            <table id="searchResult" class="newtable">
                                <tr>
                                    <th>Test Cases</th>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="buttonContainer" id="buttonContainer">
                        <button class="button centeralign" id="reset">Reset</button>
                        <button class="button centeralign" id="view" onclick="viewclicked()">View</button>
                    </div>
                </section>
            </section>
            <aside>
            </aside>
            <footer>
                <p> Diagnostics Lab</p>
            </footer>
            <script src="js/entertestResult.js"></script>
            <script type="text/javascript" src="js/lib.js"></script>
           
        <script src="js/jquery-2.2.1.min.js"></script>   
        <script>
            var testdata =<?php
            include("config.php");
            session_start();

            $sql = "select test_name, observed_value,normal_range from test_record join test
            on test_record.test_id = test.test_id where report_id =1";

            $result =  mysqli_query($link, $sql);
            $allTest = array();
    // echo "result". $result.size();

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   $allTest[]= array("TEST_NAME"=>$row["test_name"],"OBSERVED_VALUE"=>$row["observed_value"],"NORMAL_RANGE"=>$row["normal_range"]);
                   
               }
                // foreach( $allTest as $test)
                $allTestJson =  json_encode($allTest);
        }
        echo $allTestJson;
        ?>;
         // document.getElementById("searchResult").style.visibility = "hidden";
        console.log(testdata);
        </script>
    </body>

    </html>
