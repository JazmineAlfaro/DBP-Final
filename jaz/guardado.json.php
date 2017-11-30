<?php
//ini_set( 'display_errors', 0 );
header("Content-Type: text/javascript");
$data = json_decode(file_get_contents('php://input'), true);
$dbhost = "localhost";
$dbuser = "manuel";
$dbpass = "1";
$db = "usuarios";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Conexion fallida: %s\n". $conn -> error);

$sql = "SELECT id FROM registrar WHERE id='" . $data["id"] . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$sql = "UPDATE registrar SET ";
	$sql .= "username='" . $data["username"] . "',";
	$sql .= "name='" . $data["name"] . "',";
	$sql .= "last_name='" . $data["last_name"] . "',";
	$sql .= "password='" . $data["password"] . "',";
	$sql .= "WHERE id='" . $data["id"] . "'";
}
else {
	$sql = "INSERT INTO registrar (id,username, name, last_name, password) ";
	$sql .= " VALUES ('" . $data["id"]. "','". $data["username"] . "', '" . $data["name"] . "', '";
	$sql .= $data["last_name"] . "', '" . $data["password"] . "')";
}
$result = $conn->query($sql);
if ($result === TRUE) {
	echo '{"id": "' . $data["id"] . '"}';
}
else {
	echo '{"error": "No se pudo guardar el usuario"}';
}
$conn->close();
?>