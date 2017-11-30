<!DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
    <meta charset="utf-8">
    <link type="text/css" href="cssfinal.css" rel="stylesheet" />
	<script src="https://code.jquery.com/jquery-1.11.3.js"></script>
	<script>
function guardar() {
	var usuario = {
		"username": jQuery("#username").val(),
		"name": jQuery("#name").val(),
		"last_name":  jQuery("#last_name").val(),
		"password":  jQuery("#password").val()
	};
	jQuery.ajax({method: "POST", url: "guardado.json.php", data: JSON.stringify(usuario), dataType: 'text'}).done(function( responseText ) {
	alert(responseText);
  });
}
	</script>
</head>

<body>
    <div id="registrar">
            <a href="pagina_inicio.html">Regresar</a>
    </div>
    <div id="envoltura">
        <div id="contenedor">
		
			<div id="head">Pagina de registro</div>
			
            <div id="cuerpo">
 
                <form id="form-login" action="#" method="post" >
				
					<p><label for="nickname">Nombre de Usuario:</label></p>
                        <input name="nickname" type="text" id="username" class="nickname" placeholder="Ingresa tu nombre de usuario" autofocus=""/ ></p>
                    
					<p><label for="nombre">Nombre:</label></p>
                        <input name="nombre" type="text" id="name" class="nombre" placeholder="Pon tu nombre" autofocus="" /></p>
 
                    <p><label for="apellidos">Apellidos:</label></p>
                        <input name="apellidos" type="text" id="last_name" class="apellidos" placeholder="Pon tus apellidos" autofocus="" /></p>
 
                    <p><label for="pass">Password:</label></p>
                        <input name="pass" type="password" id="password" class="pass" placeholder="Pon tu contraseña" /></p>
					
                    <p id="bot"><input name="submit" type="submit" id="boton" value="Registrar" class="boton"onclick="guardar()" /></p>
                </form>
            </div>
            
        </div>
 
    </div>
 
</body>
 
</html>