<?php


// Create connection
$conn = new mysqli("localhost", "root", "", "SPORT");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$a=$_POST["Q1"];$b=$_POST["Q2"];$c=$_POST["O3"];$d=$_POST["Q4"];$e=$_POST["Q5"];$f=$_POST["O6"];
$g=$_POST["Q7"];$h=$_POST["Q8"];$i=$_POST["O9"];$j=$_POST["Q10"];$k=$_POST["Q11"];$l=$_POST["Q12"];
//echo $a;
$sql = "INSERT INTO Answer (A1,A2,A3,A4,A5,A6,A7,A8,A9,A10,A11,A12)
VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>