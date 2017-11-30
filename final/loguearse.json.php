<?php
header("Content-Type: text/javascript");
session_start();
$data = json_decode(file_get_contents('php://input'), true);
$dbhost = "localhost";
$dbuser = "manuel";
$dbpass = "1";
$db = "usuarios";
 
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Conexion fallida: %s\n". $conn -> error);

$sql = "SELECT id FROM registrar WHERE username='" .  $data["username"] . "' AND password='" .  $data["password"] . "'";
$result = $conn->query($sql);
$usuario = array();
if($row = $result->fetch_assoc()) {
	$_SESSION["usuario_id"] = $row["id"];
	echo '{"response": "Inicio correcto", "usuario_id": "' . $row["id"] . '"}';
} else {
	echo '{"response": "Usuario o contraseña no valida."}';
}
$conn->close();
?>