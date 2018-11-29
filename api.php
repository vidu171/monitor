<?php
// include_once("config.php");

$conn = new mysqli('localhost', 'root', 'naruto', 'wirelesspatient');        

$patient_id =  $_GET["patient_id"];
$temprature =  $_GET["temperature"];
$heartbeat =  $_GET["heartbeat"];


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


// echo $patient_id."<br>".$temprature."<br>".$heartbeat;


$sql = "INSERT INTO data (patent_id, temperature, heartbeat) VALUES ('$patient_id', '$temprature', '$heartbeat')";

if ($conn->query($sql) === TRUE) {
    echo "200";
} else {
    echo "300";
}

        
?>

<!-- 192.168.1.101/monitor/api.php?patent_id=1&temperature=92&heartbeat=64 -->