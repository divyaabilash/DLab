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
<li><a href="patientDashboard.php">Home</a></li>
</ul>
</nav>
<section class="techcontents">
    <div class="tableDiv">
                    <table id="searchResult" class="newtable">
                        <tr>
                            <th>ReportID</th>
                            <th>Report Name</th>
                            <th>Date</th>
                        </tr>
                        
                        <tr>
                            <td>1</td>
                            <td><a href="patientView.php">Haematology</a></td>
                            <td>03/01/2016</td>
                        </tr>
                    
                       <tr>
                            <td>2</td>
                            <td> <a href="patientView_2.php">Renal Function Test</a></td>
                            <td>01/02/2016</td>
                        </tr>
                  
                    
                        <tr>
                            <td>3</td>
                            <td><a href="patientView_3.php">Liver Function Test</a></td>
                            <td>12/05/2015</td>
                        </tr>

                    </table>
                </div>
   <!--  <ul>
<li><a href="patientView.html">View Reports</a></li>
</ul> -->

</section>
</section>
<footer>
<p> Diagnostics Lab</p>
</footer>
</body>
</html>