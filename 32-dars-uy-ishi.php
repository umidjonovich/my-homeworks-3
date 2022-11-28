<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sport";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
	die("Ma'lumotlar bazasi ulanmadi". $conn->connect_error);
}
echo "Ma'lumotlar bazasi ulandi";

// $sql = "CREATE DATABASE sport";
// if ($conn->query($sql)=== TRUE){
// 	echo "Ma'lumotlar bazasi omadli ulandi";
// }
// else {
// 	echo"Xatolik bor ulanmadi" .$conn->error;
// }

// $sql = "CREATE TABLE football(
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, firstname VARCHAR(30) NOT NULL,lastname VARCHAR(30) NOT NULL, club VARCHAR(50),reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
$conn->close();
?>