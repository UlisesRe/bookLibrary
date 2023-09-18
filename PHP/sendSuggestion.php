
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "viewbook";

$conn = mysqli_connect($servername, $username, $password, $dbname,);

if (!$conn) {
	die("Connection failed: " . mysqli_conect_error());
}


$Titulo = $_POST["titulo"];
$Autor = $_POST["autor"];
$Descripcion = $_POST["descripcion"];

$sql = "INSERT INTO sugerencias (titulo, autor, descripcion)
	VALUES ('$Titulo', '$Autor', '$Descripcion')";


if ($conn->query($sql) === TRUE) {
	echo "<script>alert('Sugerencia enviada');location.href =history.back();</script>";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error; 
}

mysqli_close($conn);
