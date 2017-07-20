<?
 
$nomerem = trim($_POST["nome"]);
$remetente = trim($_POST["email"]);
$fone = isset($_POST["fone"]) ? trim($_POST["fone"]) : 'Telefone não informado!';
$assunto = trim($_POST["assunto"]);

$mensagem 	= 	"Nome: " . $nomerem . "\r\n"; 
$mensagem	.=	"E-mail: " . $remetente . "\r\n";
$mensagem	.=	"Fone: " . $fone . "\r\n"; 
$mensagem	.=	"Assunto: " . $assunto . "\r\n";
$mensagem	.=	"Mensagem: " . $_POST["mensagem"] . "\r\n";

if($_POST["assunto"] === "contato"){
	$mailto = "contato@artesandratecnologia.com.br";
}elseif($_POST["assunto"] === "comercial"){
	$mailto = "comercial@artesandratecnologia.com.br";
}else{
	$mailto = "webmaster@artesandratecnologia.com.br";
}

$mailfrom = "contato@artesandratecnologia.com.br";
 
$headers = "MIME-Version: 1.1\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\n";
$headers .= "From: Contato artesandratecnologia.com.br <$mailfrom>"."\n"; // remetente
$headers .= "Return-Path: Teste Locaweb <$mailfrom>"."\n"; // return-path

function validaEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}//

if (isset($nomerem) && validaEmail($remetente) && isset($_POST["assunto"]) && isset($_POST["mensagem"])) {
    $envio 	= mail($mailto, $assunto, nl2br($mensagem), $headers, "-r". $mailfrom);
    $pagina = "../ok.php";
} else {
    $pagina = "../error.php";
}

header("location:$pagina");	

?>