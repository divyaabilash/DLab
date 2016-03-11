<!Doctype html>
<html>

<head>
    <title>DiagnosticsLab</title>
    <link rel="stylesheet" href="stylesheet.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
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
        </a>           <!--  <a href="signup.html">
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
                <li><a href="tech-viewhome.php">Home</li>
                <li><a href="Registernewpatient.html">Register New Patient</a></li>
                <li><a href="viewTestResult.php">View Test Result</a></li>
                <li><a href="entertestresult.php">Enter Test Result</a></li>
                <li><a href="CreatingTestCase.php">Order New Test</a></li>
        </nav>
        <section class="techcontents">
            <embed src="report.pdf" width="800px" height="1100px">

           <!--  <div id="error" class="errortext"></div>
            

            <div class="tableDiv">
                <table id="searchResult" class="newtable">
                    <tr>
                        <th>Test Cases</th>
                    </tr>
                </table>
            </div>

            </div>
            <div class="buttonContainer" id="buttonContainer">
                <button class="button centeralign" id="create" onclick="viewclicked()">View</button>
            </div> -->
        </section>
       

    <footer>
        <p> Diagnostics Lab</p>
    </footer>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</body>

</html>
