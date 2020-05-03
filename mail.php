<?php

function validar_campo($campo) 
{
	$campo = trim($campo);
	$campo = stripcslashes($campo);
	$campo = htmlspecialchars($campo);

	return $campo;
}

header('Content-type: aplication/json');

if ( isset($_POST["fname"]) && !empty($_POST["fname"]) &&  
	isset($_POST["email"]) && !empty($_POST["email"]) &&
	isset($_POST["subject"]) && !empty($_POST["subject"]) &&
	isset($_POST["msg"]) && !empty($_POST["msg"])) 
	{
		$destinoMail = "elzeke55@gmail.com";

		$nombre = validar_campo($_POST["fname"]);
		$email = validar_campo($_POST["email"]);
		$subject = validar_campo($_POST["subject"]);
		$msg = validar_campo($_POST["msg"]);
		
		$contenido = "<b>Nombre: </b>".$nombre."<br><b>Email: </b>".$email."<br><b>Asunto: </b>".$subject."<br><b>Mensaje: </b>".$msg;

		mail($destinoMail,"Mensaje desde el formulario de contacto de +54", $contenido);
		return print(json_encode('ok'));
	}

	return print(json_encode('No enviado'));


?>