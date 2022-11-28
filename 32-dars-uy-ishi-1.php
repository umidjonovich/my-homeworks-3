<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sport";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
	die("Ma'lumotlar bazasi ulanmadi!". $conn->connect_error);
}
echo "Ma'lumotlar bazasi ulandi";
$smth = $conn->prepare("INSERT INTO football (firstname, lastname, club) VALUES(?,?,?)");
$smth->bind_param("sss", $firstname, $lastname, $club);

$firstname = "Cristiano";
$lastname = "Ronaldo";
$club = "Manchester United";
$smth->execute();

$firstname = "Leonel";
$lastname = "Messi";
$club = "Paris-Sent Germain";
$smth->execute();

echo "Yangi ma'lumotlar qo'shildi";
$smth->close();

?>












<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sport";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
	die("Ma'lumotlar bazasi ulanmadi!". $conn->connect_error);
}
echo "Ma'lumotlar bazasi ulandi";
$smth = $conn->prepare("INSERT INTO basketball (firstname, lastname, club) VALUES(?,?,?)");
$smth->bind_param("sss", $firstname, $lastname, $club);

$firstname = "Micheal";
$lastname = "Jordan";
$club = "Chicago Bulls";
$smth->execute();

$firstname = "Earvin";
$lastname = "Johnson Jr.";
$club = "Los Angeles Lakers";
$smth->execute();

echo "Yangi ma'lumotlar qo'shildi";
$smth->close();

?>









<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sport";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
	die("Ma'lumotlar bazasi ulanmadi!". $conn->connect_error);
}
echo "Ma'lumotlar bazasi ulandi";
$smth = $conn->prepare("INSERT INTO volleyball (firstname, lastname, club) VALUES(?,?,?)");
$smth->bind_param("sss", $firstname, $lastname, $club);

$firstname = "Wilfredo";
$lastname = "Leon";
$club = "Safety Conad Perugia";
$smth->execute();

$firstname = "Earvin";
$lastname = "N'Gapeth";
$club = "Azimut Modena";
$smth->execute();

echo "Yangi ma'lumotlar qo'shildi";
$smth->close();

?>








<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sport";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
	die("Ma'lumotlar bazasi ulanmadi!". $conn->connect_error);
}
echo "Ma'lumotlar bazasi ulandi";
$smth = $conn->prepare("INSERT INTO hockey (firstname, lastname, club) VALUES(?,?,?)");
$smth->bind_param("sss", $firstname, $lastname, $club);

$firstname = "Sidney";
$lastname = "Crosby";
$club = "Pittsburgh Penguins";
$smth->execute();

$firstname = "Alexander";
$lastname = "Ovechkin";
$club = "Washington Capitals";
$smth->execute();

echo "Yangi ma'lumotlar qo'shildi";
$smth->close();

?>












<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sport";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
	die("Ma'lumotlar bazasi ulanmadi!". $conn->connect_error);
}
echo "Ma'lumotlar bazasi ulandi";
$smth = $conn->prepare("INSERT INTO boxing (firstname, lastname, club) VALUES(?,?,?)");
$smth->bind_param("sss", $firstname, $lastname, $club);

$firstname = "Mike";
$lastname = "Tyson";
$club = "Professional boxer";
$smth->execute();

$firstname = "Josh";
$lastname = "Taylor";
$club = "Professional boxer";
$smth->execute();

echo "Yangi ma'lumotlar qo'shildi";
$smth->close();

?>