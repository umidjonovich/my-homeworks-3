<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "muaz";

$conn = new mysqli($servername,$username,$password, $dbname);

if ($conn->connect_error){
	die("Ma'lumotlar bazasi ulanmadi". $conn->connect_error);
}
echo "Ma'lumotlar bazasi ulandi";


// $sql = "DELETE FROM muazacademy WHERE id=2";

// if ($conn->query($sql)===TRUE) {
// 	echo "Bazadan o'chirildi !";
// }
// else {
// 	echo "Bazadan o'chirilishda xatolik bor"
// 	.$conn->error;
// }


$sql = "UPDATE muazjadval SET lastname='Komilov emas' WHERE id=1";

if ($conn->query($sql)===TRUE) {
	echo "Baza yangilandi !";
}
else {
	echo "Baza yangilanmadi"
	.$conn->error;
}
?>