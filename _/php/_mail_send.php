<?php

	$to      	= 'amanda_keys@hotmail.com';
	$nome 	 	= $_POST["nome"];
	$email 	 	= $_POST["email"];
	$fone 	 	= isset($_POST["fone"]) ? $_POST["fone"] : 'Não informado.';
	$subject 	= isset($_POST["assunto"]) ? $_POST["assunto"] : 'Contato do site artesandratecnologia.com.br';

	$message 	= 	"Nome: " . $nome . "\r\n"; 
	$message	.=	"E-mail: " . $email . "\r\n";
	$message	.=	"Fone: " . $fone . "\r\n"; 
	$message	.=	"Assunto: " . $subject . "\r\n";
	$message	.=	"Mensagem: " . $_POST["mensagem"] . "\r\n";

	$headers 	= 'From: contato@artesandratecnologia.com.br' . "\r\n" .
	    		  'Reply-To: ' . $email . "\r\n" .
	    		  'X-Mailer: PHP/' . phpversion() . "\r\n";
	$headers 	.= "MIME-Version: 1.0\r\n";
	$headers 	.= "Content-Type: text/html; charset=ISO-8859-1\r\n";	    

	function validaEmail($email) {
	    return filter_var($email, FILTER_VALIDATE_EMAIL);
	}//

	if (isset($nome) && validaEmail($email) && isset($_POST["mensagem"])) {

	    mail($to, $subject, $message, $headers);
	    //mail($para, $assunto, nl2br($mensagem), $headers);
	    $pagina = "../ok.php";

	} else {

	    $pagina = "../error.php";

	}

	header("location:$pagina");	

?>