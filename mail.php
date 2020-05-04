<?php

function validar_campo($campo) 
{
	$campo = trim($campo);
	$campo = stripcslashes($campo);
	$campo = htmlspecialchars($campo);

	return $campo;
}

header('Content-type: aplication/json');

	if ( 
		isset($_POST["fname"]) && !empty($_POST["fname"]) &&
		isset($_POST["email"]) && !empty($_POST["email"]) && 
		isset($_POST["subject"]) && !empty($_POST["subject"]) &&
		isset($_POST["msg"]) && !empty($_POST["msg"]) 
	)

	if(empty($_POST['g-recaptcha-response']))
		{
			return print(json_encode('ResolverCaptcha'));
		}
		else
		{
			$secrete_key = '6LekAvIUAAAAAG8muJQS1Y8lH5TxrmyHQQu0Quze';
			$response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secrete_key.'&response='.$_POST['g-recaptcha-response']);
			$response_data = json_decode($response);
			
		}
	
	{
		$destinoMail = "elzeke55@gmail.com";

		$nombre = validar_campo($_POST["fname"]);
		$email = validar_campo($_POST["email"]);
		$subject = validar_campo($_POST["subject"]);
		$msg = validar_campo($_POST["msg"]);
		
		$contenido = "Nombre: ".$nombre. "\n Email: ".$email."\n Asunto: ".$subject." \n Mensaje: ".$msg;

		mail($destinoMail,"Mensaje desde el formulario de contacto de +54", $contenido);
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