<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "muaz";

$conn = new mysqli($servername,$username,$password, $dbname);
if ($conn->connect_error){
	die("Ma'lumotlar bazasi ulanmadi!". $conn->connect_error);
}
echo "Ma'lumotlar bazasi ulandi";
$smth = $conn->prepare("INSERT INTO muazacademy (firstname, lastname, email) VALUES(?,?,?)");
$smth->bind_param("sss", $firstname, $lastname, $email);

$firstname = "Muaz";
$lastname = "Academy";
$email = "muazacademy@gmail.com";
$smth->execute();

$firstname = "Merit";
$lastname = "School";
$email = "meritshool@gmail.com";
$smth->execute();

echo "Yangi ma'lumotlar qo'shildi";
$smth->close();

// $sql = "SELECT id, firstname, lastname FROM muazacademy WHERE lastname='muaz-academy' ";
// $result = mysqli_query($conn, $sql);

// if(mysqli_num_rows($result)>0) {
// 	while ($row = mysqli_fetch_assoc($result))
// {
// 	echo "id:"  .$row["id"]. " - Name"
//      .$row["firstname"]. "" .$row["lastname"]. "<br>";
//      }
//  }
//  else {
//  	echo "Natija 0";
//  }
?>