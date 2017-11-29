<?php
header("Content-Type: text/javascript");
session_start();
$data = json_decode(file_get_contents('php://input'), true);
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "usuarios";
 
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Conexion fallida: %s\n". $conn -> error);

$sql = "SELECT name FROM usuario WHERE username='" .  $data["username"] . "' AND password='" .  $data["password"] . "'";
$result = $conn->query($sql);
$usuarios = array();
if($row = $result->fetch_assoc()) {
	$_SESSION["user_name"] = $row["username"];
	echo '{"response": "Inicio correcto", "user_name": "' . $row["username"] . '"}';
} else {
	echo '{"response": "Usuario o contraseña no valida."}';
}
$conn->close();
?>