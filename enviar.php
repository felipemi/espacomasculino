<?php

if (isset($_POST['nome'])) {
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/plain; charset=utf-8\r\n";
    $headers .= "From: $email\r\n";
    $emailrem = "espacomasculino@uol.com.br";

// Coloque a mensagem que irá ser enviada para seu e-mail abaixo:
    $msg = "Os dados seguem abaixo: \n ";
    if (list($campo, $valor) = each($HTTP_POST_VARS)) {
        $msg .= "Nome: " . $nome . "\n Telefone: " . $telefone . " \n Email: " . $email . " \n Mensagem: " . $mensagem . " \n";
    }

// Agora iremos fazer com que o PHP envie os dados do Formulário para seu e-mail:
    mail($email, "Nova mensagem enviada pelo site do Espaço Masculino", $msg, $headers);
    
    if (mail) {
        echo "Mensagem enviada com sucesso!";
        exit();
    } else {
        echo "Erro ao enviar mensagem, tente novamente.";
        exit();
    }


}else{
    echo "Erro, tente novamente.";
}




?>