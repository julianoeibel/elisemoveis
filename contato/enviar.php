<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $GetPost = filter_input_array(INPUT_POST,FILTER_DEFAULT);

    $Erro = true;
    $Nome = $GetPost['name'];
    $Email = $GetPost['email'];
    $Telefone = $GetPost['telefone'];
    $Assunto = $GetPost['subject'];
    $Cidade = $GetPost['cidade'];
    $Estado = $GetPost['estado'];
    $Cep = $GetPost['cep'];
    $Cliente = $GetPost['cliente'];
    $Mensagem = $GetPost['message'];

    include_once 'class/class.smtp.php';
    include_once 'class/class.phpmailer.php';

    $Mailer = new PHPMailer;
    $Mailer->CharSet = 'utf8';
    $Mailer->SMTPDebug = 3;
    $Mailer->IsSMTP();
    $Mailer->Host = "smtp.umbler.com";
    $Mailer->SMTPAuth = 'true';
    $Mailer->Username = 'sistema@elise.com.br';
    $Mailer->Password = 'Si.elel19';
    $Mailer->SMTSecure = 'tls';
    $Mailer->Port = 587;
    $Mailer->FromName = "{$Nome}";
    $Mailer->From = 'sistema@elise.com.br';
    $Mailer->AddAddress('felipe@elise.com.br');
	$Mailer->AddAddress('comercial@elise.com.br');
    $Mailer->IsHTML(true);
    $Mailer->Subject = "Novo e-mail de {$Email} ".date("H:i")." - ".date("d/m/Y");
    $Mailer->Body = "E-mail enviado por {$Nome} <br>Telefone: {$Telefone} <br>Assunto: {$Assunto}<br>Cidade: {$Cidade}<br>Estado: {$Estado}<br>CEP: {$Cep}<br>Tipo de Cliente: {$Cliente}<br>Mensagem: {$Mensagem}";

    if($Mailer->Send()) {
        $Erro = false;
    }
    
    var_dump($Erro);
    
    header("location:index.php?msg=enviado");
    }else{
        header("location:index.php");
    }

?>