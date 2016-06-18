<?php
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$mensaje = $_POST['mensaje'];
	$para = 'matiascandia05@hotmail.com';
	$titulo = 'MENSAJE DE PORTFOLIO WEB';
	$header = 'From: ' . $email;
	$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";
	  
	if ($_POST['submit']) {
		if (mail($para, $titulo, $msjCorreo, $header)) {
			echo "<script language='javascript'>
			alert('Mensaje enviado, muchas gracias.');
			window.location.href = 'http://matiascandia.com';
			</script>";
		} else {
			echo 'Falló el envio';
		}
	}
?> 