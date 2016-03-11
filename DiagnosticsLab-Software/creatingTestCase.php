<!Doctype html>
<html>

<head>
    <title>DiagnosticsLab</title>
    <link rel="stylesheet" href="stylesheet.css" />
    
        <script src="js/jquery-2.2.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="js/util.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <div class="paitentInfo" id="id">
                <label>Patient ID:<sup>*</sup>
                    <input id="patientID" placeholder="xxxxxx" required>
                </label>
            </div>
            <div class="paitentInfo">
                <label> Patient Name:
                    <input id="patientName" placeholder="xxxxxx">
                </label>
            </div>
            <div class="searchtab" style="clear:both">
                <label> Test Search:<sup>*</sup>
                    <input id="testSearch" placeholder="xxxxxx" required>
                    <button class="search" id="search" onclick="clicked()"><i class="fa fa-search fa-2x"></i></button>
                </label>
            </div>
            <div class="tableDiv">
                <table id="searchResult" class="newtable">
                    <tr>
                        <th>Test Cases</th>
                    </tr>
                </table>
            </div>
            <div class="tableDiv">
                <table id="selectedTest" class="newtable">
                    <tr>
                        <th>Selected Tests</th>
                    </tr>
                </table>
            </div>
            <div class="buttonContainer">
                <button class="button centeralign" id="reset">Reset</button>
                <button class="button centeralign" id="create" onclick="createclicked()">Create</button>
            </div>
        </section>
    </section>
    <footer>
        <p> Diagnostics Lab</p>
    </footer>
    <script src="js/creatingTestCase.js"></script>
    <script type="text/javascript" src="js/lib.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
var data =
    <?php
include("config.php");
session_start();
 $sql = "SELECT * FROM TEST" ;
    $result =  mysqli_query($link, $sql);
    $allTest = array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
             $allTest[]= array("TEST_ID"=>$row["TEST_ID"],"TEST_CATEGORY_ID"=>$row["TEST_CATEGORY_ID"],"TEST_NAME"=>$row["TEST_NAME"],"NORMAL_RANGE"=>$row["NORMAL_RANGE"]);
                        
            }
    }
    
    // foreach( $allTest as $test)
    // {
    //     echo $test["TEST_NAME"];
    //     echo "\n";

    // }
$allTestJson =  json_encode($allTest);

 echo $allTestJson;
// echo "\n";
?>
;
// console.log(data);
setdata(data);

</script>
</body>

</html>
