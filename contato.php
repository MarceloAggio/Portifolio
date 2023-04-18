<?php
if(isset($_POST['enviar'])) {

	// Variáveis do formulário
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$mensagem = $_POST['mensagem'];

	// Destinatário e assunto do e-mail
	$para = "marceloaggio10@gmail.com";
	$assunto = "Mensagem do formulário de contato";

	// Corpo do e-mail
	$corpo = "Nome: ".$nome."\n".
			 "E-mail: ".$email."\n".
			 "Mensagem: ".$mensagem;

	// Cabeçalhos do e-mail
	$cabecalhos = "From: remetente@example.com"."\r\n".
				  "Reply-To: ".$email."\r\n".
				  "X-Mailer: PHP/".phpversion();

	// Enviar o e-mail
	if(mail($para, $assunto, $corpo, $cabecalhos)) {
		echo "E-mail enviado com sucesso!";
	} else {
		echo "Erro ao enviar o e-mail.";
	}

}
?>
