
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "viewbook";

$conn = mysqli_connect($servername, $username, $password, $dbname,);

if (!$conn) {
	die("Connection failed: " . mysqli_conect_error());
}


$Nombre = $_POST["nombre"];
$Opinion = $_POST["opinion"];
$Libro = $_POST["libro"];

$sql = "INSERT INTO comentarios (nombre, opinion, libro)
	VALUES ('$Nombre', '$Opinion', '$Libro')";


if ($conn->query($sql) === TRUE) {
	echo "<script>alert('Opinion enviada');location.href =history.back();</script>";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error; 
}

mysqli_close($conn);
