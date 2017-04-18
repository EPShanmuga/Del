<?php
error_reporting(E_ERROR);

// Create connection
$conn = new mysqli("localhost", "root", "", "SPORT");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT Q1, Q2, Q3, O31, O32 FROM question";
$result = $conn->query($sql);

if ($result->num_rows > 0) {//echo $result->num_rows;
    // output data of each row
    if($row = $result->fetch_assoc()) {
        //echo "Q1 : " .$row["Q1"]. " - Q2: " . $row["Q2"]. " - Q3 : " . $row["Q3"]. " - O31 : ". $row["O31"]." - O32 : ". $row["O32"];

        $myObj->Q1=$row["Q1"];
        $myObj->Q2=$row["Q2"];
        $myObj->Q3=$row["Q3"];
        $myObj->O31=$row["O31"];
        $myObj->O32=$row["O32"];
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }
    else echo "NORESULTS";
} 
else echo "0RESULTS";
$conn->close();
?>