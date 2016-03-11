<!Doctype html>
<html>

<head>
    <title>DiagnosticsLab</title>
    <link rel="stylesheet" href="stylesheet.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
        <script src="js/jquery-2.2.1.min.js"></script>
          <script src="js/util.js"></script>
        <script src="js/jquery-2.2.1.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body class="padding">
    <header>
        <div class="logo">
            <img class="img" src="img/Icon.jpg">
        </div>
        <div>
            <h1 class="header">Diagnostics Lab</h1>
        </div>
        <div class="buttons">
            <a href="index.php">
                <button class="button">Log Out</button>
            </a>
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
            <div id="error" class="errortext"></div>
            <!-- <form method="post"> -->
            <div class="paitentInfo">
                <label>Report ID:<sup>*</sup>
                    <input id="reportID" placeholder="xxxxxx" required>
                </label>
                <button class="search" id="search" type="submit" name="submit" onclick="clicked()"><i class="fa fa-search fa-2x"></i></button>
            </div>
        <!-- </form> -->
            <div id="layouthidden">
               <table style="width:80%">
                <tr id="table1">
                    <th>Test Names</th>
                    <th>Test Values</th>
                    <th>Normal Values</th>
                </tr>
                <tr>
                    <td id="name">Haemoglobin</td>
                    <td><input type="text" placeholder="normal value" id="test1" value="14.1g/dl"></td>
                    <td><input type="text" placeholder="normal value" id="normalvalue1" value="13.5-18g/dl"></td>
                </tr>
                <tr>
                    <td>TC</td>
                    <td><input type="text" placeholder="normal value" id="test2" value="7400cells/cumm"></td>
                    <td><input type="text" placeholder="normal value" id="normalvalue2"value="4000-11000 cell/cumm" readonly></td>
                </tr>
                <tr>
                    <td>Neutrophil</td>
                    <td><input type="text" placeholder="normal value" id="test3" value="74%"></td>
                    <td><input type="text" placeholder="normal value" id="normalvalue3" value="40-75%" readonly></td>
                </tr>
                <tr>
                    <td>Lymphrocyte</td>
                    <td><input type="text" placeholder="normal value" id="test4" value="22%"></td>
                    <td><input type="text" placeholder="normal value" id="normalvalue4" value="20-50%" readonly></td>
                </tr>
                     <tr>
                    <td>Monocyte</td>
                    <td><input type="text" placeholder="normal value" id="test4" value="04%"></td>
                    <td><input type="text" placeholder="normal value" id="normalvalue4" value="2-10%" readonly></td>
                </tr>
                     <tr>
                    <td>Eosinobhil</td>
                    <td><input type="text" placeholder="normal value" id="test4" value="00%"></td>
                    <td><input type="text" placeholder="normal value" id="normalvalue4" value="1-6%" readonly></td>
                </tr>
                     <tr>
                    <td>Basobhil</td>
                    <td><input type="text" placeholder="normal value" id="test4" value="00%"></td>
                    <td><input type="text" placeholder="normal value" id="normalvalue4" value="0-1%" readonly></td>
                </tr>
            </table> 
            </div>
            <div class="buttonContainer" id="buttonContainer">
                <button class="button centeralign" id="reset">Reset</button>
                <button class="button centeralign" id="create" onclick="viewclicked()">View</button>
            </div>
        </section>
    </section>
    <aside>
    </aside>
    <footer>
        <p> Diagnostics Lab</p>
    </footer>
    <script src="js/viewTestResult.js"></script>
    <script type="text/javascript" src="js/lib.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
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
        // console.log(testdata);
setdata(testdata);

        </script>
</body>

</html>
