<?php
//ini_set( 'display_errors', 0 );
header("Content-Type: text/javascript");
$data = json_decode(file_get_contents('php://input'), true);
$dbhost = "localhost";
$dbuser = "manuel";
$dbpass = "1";
$db = "usuarios";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Conexion fallida: %s\n". $conn -> error);
$sql = "SELECT username FROM registrar WHERE username='" . $data["username"] . "'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	$sql = "UPDATE registrar SET ";
	$sql .= "name='" . $data["name"] . "',";
	$sql .= "last_name='" . $data["last_name"] . "',";
	$sql .= "password='" . $data["password"] . "',";
	$sql .= "WHERE username='" . $data["username"] . "'";
}
else {
	$sql = "INSERT INTO registrar (username, name, last_name, password) ";
	$sql .= " VALUES ('" . $data["username"] . "', '" . $data["name"] . "', '";
	$sql .= $data["last_name"] . "', '" . $data["password"] . "')";
}
$result = $conn->query($sql);
if ($result === TRUE) {
	echo '{"username": "' . $data["username"] . '"}';
}
else {
	echo '{"error": "No se pudo guardar el usuario"}';
}
$conn->close();
?>