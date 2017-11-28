<!DOCTYPE html>
<html>
<head>
<style>
table{
	border:1px solid black;
	border-collapse:collapse;
}
</style>
<cript src="">
<script>
var usuario = {
	nombre:"nadie",
	username:"nadie",
	pasword:"nadie"
};
var user=usuario;
function registrar(){
	var c=document.getElementById("a1").value;
	user.nombre=c;
	c=document.getElementById("a2").value;
	user.username=c;
	c=document.getElementById("a3").value;
	user.pasword=c;
	registra(user.nombre,user.username,user.pasword);
	//document.getElementById("por").innerHTML=user.nombre+" "+user.username+" "+user.pasword;
} 
</script>
</head>
<body>
<table>

	<tr>
		<td>Nombre: </td>
		<td><input type="text" id="a1"/></td>
	</tr>
	<tr>
		<td>Username:</td>
		<td><input type="text" id="a2"/></td>
	</tr>
	<tr>
		<td>Pasword:</td>
		<td><input type="password" id="a3"/></td>
	</tr>
	<tr>
		<td colspan="2" style="text-align:center"> <button onclick="registrar()">REGISTRAR</td>
	</tr>
</table>
<p id="por"></p>
<?php
$servername = "ejemplo";
$username = "manuel";
$password = "123";
$host = "localhost";

// Create connection
$conn = new mysqli($host, $username, $password,$servername);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
/*
function registra(){
$c = getElementById("a1").value;
$d = getElementById("a2").value;
$e = getElementById("a3").value;
$sql = "INSERT INTO usuario (Username, Pasword, Nombre)
VALUES (d, e, c)";
}
*/
function registra($c,$d,$e){
	$sql = "INSERT INTO usuario (Username, Pasword, Nombre)
VALUES (d, e, c)";
}
?>
</body>
</html>