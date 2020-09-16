<?php
$dest = "contato@empadapraiana.com.br";
//variáveis
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$data_nasc = $_POST['nascimento'];
$profissao = $_POST['profissao'];
$escolaridade = $_POST['escolaridade'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro']; 
$tel = $_POST['telefone'];
$email = $_POST['email'];
$capital = $_POST['capital'];
$mensagem = $_POST['mensagem'];

    $headers = "MIME-Version 1.1\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: contato@empadapraiana.com.br\r\n";
    $headers .= "Return-Path: contato@empadapraiana.com.br\r\n";
    //$headers .= "Reply-To: " . $email ."\r\n";
    //$to = "Empada Praiana <". $dest . ">";
    $subject = "Franquia - Empada Praiana";

    $conteudo = null;
    $conteudo .= "
                    Nome: " . $nome . "
                    CPF: " . $cpf . "
                    Data de Nascimento: " . $data_nasc . "
                    Profissão: " . $profissao . "
                    Escolaridade: " . $escolaridade . "
                    Cidade: " . $cidade . "
                    Bairro: " . $bairro . "
                    Telefone: " . $tel . "
                    Email: " . $email . "
                    Capital: " . $capital . "
                    Mensagem: " . $mensagem . "
                ";
    
    $envio = mail($dest, $subject, $conteudo, $headers, "-f$dest");

    if ($envio){
        ?>
        <script>
            alert("Enviado com sucesso!");
            history.go(-1);
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Ocorreu um erro");
            history.go(-1);
        </script>
        <?php
    }
?>



  <?php
  // incluir a funcionalidade do recaptcha
  require_once "recaptchalib.php";
  
  // definir a chave secreta
  $secret = "6LcKOdQUAAAAANzWCYYg4ojN6sFnWkP3CXfdRIOA";
  
  // verificar a chave secreta
  $response = null;
  $reCaptcha = new ReCaptcha($secret);
  
  if ($_POST["g-recaptcha-response"]) {
    $response = $reCaptcha->verifyResponse($_SERVER["REMOTE_ADDR"], $_POST["g-recaptcha-response"]);
  }
  
  // deu tudo certo?
  if ($response != null && $response->success) {
    // processar o formulario
  }
  
  ?>