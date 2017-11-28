<?php
header("Content-Type: text/javascript");
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "usuarios";
 
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Conexion fallida: %s\n". $conn -> error);

$sql = "SELECT username, name, last_name, password FROM registrar";
$result = $conn->query($sql);

$users = array();
while($row = $result->fetch_assoc()) {
    $item = '{"username": "' . $row["username"] ; 
    $item .= '", "name": "' . $row["name"];
    $item .= '", "last_name": "' . $row["last_name"];
    $item .= '", "password": "' . $row["password"]. '"}';
    array_push($users, $item);
}
echo "[" . implode(", ", $users) . "]";
$conn->close();
?>