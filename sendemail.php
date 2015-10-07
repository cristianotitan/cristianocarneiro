<?php
    $name     =   $_POST['name']; //pega os dados que foi digitado no ID name.
    $email    =   $_POST['email']; //pega os dados que foi digitado no ID email.
    $subject  =   $_POST['subject']; //pega os dados que foi digitado no ID subject.
    $message  =   $_POST['message']; //pega os dados que foi digitado no ID message.
 
    $headers  = "From: $emailrn";
    $headers .= "Reply-To: $emailrn";
/*abaixo será os dados que serão enviado para o email
cadastrado para receber o formulário.*/
       $corpo = "Formulário enviadon";
       $corpo .= "Nome: " . $name . "n";
       $corpo .= "Email: " . $email . "n";
       $corpo .= "Comentários: " . $message . "n";
 
       $email_to = 'contato@cristianocarneiro.com.br'; //substitua este email pelo seu email do seu site.
    $status = mail($email_to, $subject, $corpo, $headers); //enviando o email.
    if($status) {
        echo "<script> alert('Formulário enviado com sucesso.'); </script>"; //verifica se foi enviado o email com sucesso.
    }
    else {
        echo "<script> alert('Falha ao enviar o Formulário.'); </script>"; //se houve algum erro de envio.
    }
    echo "<script> window.location.href = 'http://www.cristianocarneiro.com.br'; </script>"; //aqui você coloca uma página que será redirecionada após o envio do formulário, dei um exemplo do meu site.
?>