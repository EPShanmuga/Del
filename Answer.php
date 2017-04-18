<?php 
$conn=new mysqli("localhost","root","","SPORT");
$sql="CREATE TABLE Answer(
A1 varchar(40),
A2 varchar(40),
A3 varchar(40),
A4 varchar(40),
A5 varchar(40),
A6 varchar(40),
A7 varchar(40),
A8 varchar(40),
A9 varchar(40),
A10 varchar(40),
A11 varchar(40),
A12 varchar(40)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
?>