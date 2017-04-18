<?php
error_reporting(E_ERROR);

// Create connection
$conn = new mysqli("localhost", "root", "", "SPORT");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$a=$_GET["option"];
$sql = "SELECT Q7, Q8, Q9, O91, O92 FROM question WHERE A6='$a'";
//echo "MAYBE";
//echo "COME0";
$result = $conn->query($sql);

if ($result->num_rows > 0) {//echo $result->num_rows;
    // output data of each row
    //echo "COME1";
    if($row = $result->fetch_assoc()) {//echo "COME2";
        //echo "Q1 : " .$row["Q1"]. " - Q2: " . $row["Q2"]. " - Q3 : " . $row["Q3"]. " - O31 : ". $row["O31"]." - O32 : ". $row["O32"];

        $myObj->Q7=$row["Q7"];
        $myObj->Q8=$row["Q8"];
        $myObj->Q9=$row["Q9"];
        $myObj->O91=$row["O91"];
        $myObj->O92=$row["O92"];
        $myJSON = json_encode($myObj);
        echo $myJSON;
        //echo "COME3";
    }
} 
//else echo "ZERO";
$conn->close();
?>