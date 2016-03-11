<html>
<body>
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
    foreach( $allTest as $test)
    {
    	echo $test["TEST_NAME"];
    	echo "\n";

    }
$allTestJson =  json_encode($allTest);
echo $allTestJson;
echo "\n";
?>
</body>
</html>