<?php
$headers = "MIME-Version: 1.1\n"; // Certifique-se de utilizar o MIME 1.1, pois é o mais atual. A versão 1.0 não é recomendado.
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\n";
$headers .= 'From: Contato <contato@artesandratecnologia.com.br>' . "\n"; // Remetente precisa ser uma caixa postal do mesmo dominio da hospedagem
$headers .= "Return-Path: Teste Suporte <contato@artesandratecnologia.com.br>\n"; // return-path. Precisa ser uma caixa postal do mesmo dominio da hospedagem
$headers .= 'Cc: Contato <amanda@recifesites.com>' . "\n"; // Com cópia para
$headers .= 'Bcc: Teste Suporte <amanda_keys@hotmail.com>' . "\n"; // Cópia oculta para
$subject = "Testando o PHP Mail Cc e Bcc"; //subject
$to = "Mim <amanda_keys@hotmail.com>"; // destinatário. Você pode configurar uma variável para coletar o endereço preenchido no formulário
$message = "Mensagem do Mail() do PHP";

$envio = mail($to,$subject, $message, $headers);

if($envio){
	Print "mensagem enviada!";
}else{
	Print "erro ao enviar mensagem!";
}

?>