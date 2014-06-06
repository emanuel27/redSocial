<?php
session_start();
?>
<html>
	<head>
		<title>Mi primer Login!</title>
                <link href="Estilos/emaEstiloLogIn.css" 
			 rel="stylesheet" 
			 type="text/css" />

		
	</head>
	
	<body>
            <form action="Negocios/postlogin.php" method="post">

	<div class="fondoAzul encabezadoLogin">
		<h2>FACEBOOK<h2>
		<table>
			<tbody>
				<tr>
					<td>
						Correo Electr&oacute;nico o Tel&eacute;fono<br />
						<input type="text" id="usuario" name="usuario"/> <br />
						<input type="checkbox" id="noCerrarSesion" />
						No cerrar sesi&oacute;n
					</td>
					<td>
						Contrase&ntilde;a<br />
						<input type="password" id="password" name="password" />
						¿Olvidaste tu contrase&ntilde;a?
					</td>
					<td>
						<input type="submit" id="btnLogin"  name="btnLogin" value="Iniciar Sesi&oacute;n" class="colorDelBoton" />
			   
					</td>
				</tr>
			</tbody>
		</table>
			   
	</div>
	
	<div>
	
	<img alt="river"
             src="imagenes/carp.jpg"
		 class="tamañoImagen"
		/>
	
	</div>
    </form>
	</body>
</html>