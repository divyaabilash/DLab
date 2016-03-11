<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "lab";

    $link = mysqli_connect($servername, $username, $password,$db) or die ("400 Error , Sorry for Incovinience"); 
    if (!$link) { 
        $output = 'Unable to connect to the database server.'; 
        exit(); 
    } else {
        // echo "<p>// Connected successfully</p> ";

    }
 ?>