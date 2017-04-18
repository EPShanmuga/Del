<?php
error_reporting(E_ERROR);

// Create connection
$conn = new mysqli("localhost", "root", "", "SPORT");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$a=$_GET["option"];
$sql = "SELECT Q4, Q5, Q6, O61, O62 FROM question WHERE A3='$a'";
//echo "MAYBE";
//echo "COME0";
$result = $conn->query($sql);

if ($result->num_rows > 0) {//echo $result->num_rows;
    // output data of each row
    //echo "COME1";
    if($row = $result->fetch_assoc()) {//echo "COME2";
        //echo "Q1 : " .$row["Q1"]. " - Q2: " . $row["Q2"]. " - Q3 : " . $row["Q3"]. " - O31 : ". $row["O31"]." - O32 : ". $row["O32"];

        $myObj->Q4=$row["Q4"];
        $myObj->Q5=$row["Q5"];
        $myObj->Q6=$row["Q6"];
        $myObj->O61=$row["O61"];
        $myObj->O62=$row["O62"];
        $myJSON = json_encode($myObj);
        echo $myJSON;
        //echo "COME3";
    }
} 
//else echo "ZERO";
$conn->close();
?>