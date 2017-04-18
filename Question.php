<?php 
$conn=new mysqli("localhost","root","","SPORT");
$sql="CREATE TABLE Question(
Q1 varchar(40),
Q2 varchar(40),
Q3 varchar(40),
O31 varchar(40),
O32 varchar(40),
Q4 varchar(40),
Q5 varchar(40),
Q6 varchar(40),
O61 varchar(40),
O62 varchar(40),
Q7 varchar(40),
Q8 varchar(40),
Q9 varchar(40),
O91 varchar(40),
O92 varchar(40),
Q10 varchar(40),
Q11 varchar(40),
Q12 varchar(40)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
?>