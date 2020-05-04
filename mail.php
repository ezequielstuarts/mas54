<?php

function validar_campo($campo) 
{
	$campo = trim($campo);
	$campo = stripcslashes($campo);
	$campo = htmlspecialchars($campo);
	return $campo;
}

header('Content-type: aplication/json');
	if(empty($_POST['g-recaptcha-response']))
		{
			return print(json_encode('resolvercaptcha'));
		}
		else
		{
			$secrete_key = '6LcXQ2UUAAAAANOIyV0dbHr4mrgn-RYn-bwVmkHe';
			$response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secrete_key.'&response='.$_POST['g-recaptcha-response']);
			$response_data = json_decode($response);
			
		}
		if ( 
			isset($_POST["fname"]) && !empty($_POST["fname"]) &&
			isset($_POST["email"]) && !empty($_POST["email"]) && 
			isset($_POST["subject"]) && !empty($_POST["subject"]) &&
			isset($_POST["msg"]) && !empty($_POST["msg"]) 
		)
	
	{
		// $destinoMail = "elzeke55@gmail.com";
		$destinoMail = "s.gutierrez@mas54.com";

		$nombre = validar_campo($_POST["fname"]);
		$email = validar_campo($_POST["email"]);
		$subject = validar_campo($_POST["subject"]);
		$msg = validar_campo($_POST["msg"]);
		
		$asunto = "Contacto desde la Web de +54";
		$contenido = "<b>Nombre: </b>".$_POST['fname']."<br><b>Email: </b>".$_POST['email']."<br><b>Asunto: </b>".$_POST['subject']."<br><b>Mensaje: </b>".$_POST['msg'];

		$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
		$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$cabeceras .= 'From: contacto@mas54.com' . "\r\n";

		mail($destinoMail,$asunto,$contenido,$cabeceras);
		return print(json_encode('ok'));
	} 
	return print(json_encode('campos'));
	
?>













<!-- 

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
	isset($_POST["msg"]) && !empty($_POST["msg"]) &&
	) 
	{
		$destinoMail = "elzeke55@gmail.com";

		$nombre = validar_campo($_POST["fname"]);
		$email = validar_campo($_POST["email"]);
		$subject = validar_campo($_POST["subject"]);
		$msg = validar_campo($_POST["msg"]);
		
		$contenido = "Nombre: ".$nombre. "\n Email: </b>".$email."\n Asunto: </b>".$subject." \n Mensaje: ".$msg;

		mail($destinoMail,"Mensaje desde el formulario de contacto de +54", $contenido);
		return print(json_encode('ok'));
	}
	
	return print(json_encode('campos'));


?>

 -->