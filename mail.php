<?
	if (! isset($_POST['g-recaptcha-response'])) {
		echo "captcha";
		return;
	}
	
	// configuracion en google: https://www.google.com/recaptcha/admin#site/336830045?setup
	// owners: m.moyano@mas54.com y s.gutierrez@mas54.com
	
	$secret = '6LcXQ2UUAAAAANOIyV0dbHr4mrgn-RYn-bwVmkHe';
	$captcha = $_POST['g-recaptcha-response'];
	
	$fields = array(
        'secret'    =>  $secret,
        'response'  =>  $captcha,
        'remoteip'  =>  $_SERVER['REMOTE_ADDR']
    );
    $ch = curl_init("https://www.google.com/recaptcha/api/siteverify");
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 15);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($fields));
	$response = curl_exec($ch);
    $responseData = json_decode($response);
    curl_close($ch);

	// if(!$responseData->success) {
	// 		echo "<script>
	// 					alert('Resuelva el captcha');
 // 	               		window.location='contact.html'
 // 	  			 </script>";
	// 		return;
	// }

if(!$responseData->success) {
			echo "<script>
						alert('Resuelva el captcha');
 	               		window.location='contact.html'
 	  			 </script>";
			return;
	}

	$asunto = "Contacto desde la Web de +54";
	$msg = "<b>Nombre: </b>".$_POST['fname']."<br><b>Email: </b>".$_POST['email']."<br><b>Asunto: </b>".$_POST['subject']."<br><b>Mensaje: </b>".$_POST['msg'];
		
	$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
	$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$cabeceras .= 'From: contacto@mas54.com' . "\r\n";
	
	// $to .= 'e.stuarts@mas54.com' . "\r\n";
	$to .= 's.gutierrez@mas54.com' . "\r\n";
	
	mail($to,$asunto,$msg,$cabeceras);
	echo "<script>
                alert('Gracias por contactarnos...');
                window.location= 'index.html'
   			 </script>";
	// echo "Captcha resuelto";
?>