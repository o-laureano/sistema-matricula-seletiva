<?php

//<!-- Inclusão das funções de conexão com o banco de dados -->
global $conexao;
require_once '..\funcoes\ConexaoBD.php';

//<!-- Verificação se o formulário usa método POST para enviar dados -->
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    //<!-- Verificação se todos esses campos estão definidos no formulário -->
    if (isset($_POST['nome'], $_POST['email'], $_POST['telefone'])) {

        //<!-- Atribuição dos valores inseridos no fomrulário para suas respectivas variáveis -->
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        //<!-- Chamando a função de validação de dados do primeiro formulário. Se estiver faltando alguma informação, retorna a mensagem de erro -->
        $erros = ValidarDados($email, $telefone);

        //<!-- Função que, se não ouver nenhum erro, continua a validação -->
        if (empty($erros)) {

            //<!-- Função que chama a função InserirDados e adiciona os valores no banco de dados -->
            $id_aluno=InserirDados($nome, $email, $telefone);

            //<!-- Função feita para levar o usuário para a próxima página tendo o seu id_aluno criado como referência para os outros envios de dados -->
            if ($id_aluno!==null) {
                //<!-- Se existir id_aluno criada, o usuário vai para a próxima página tendo seu id referenciado-->
                echo '<script>window.location.href = "formulario-2.php?id=id_aluno=' . $id_aluno . '";</script>';
            }
        //<!-- Se não existir id_aluno criada, retorna um erro -->
        } else {
            echo '<script>alert("' . implode("\\n", $erros) . '");</script>';
        }
    }
}
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Matricule-se já!</title>

    <!-- CDN para importar o CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Referência ao style.css -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Importação das fontes pelo Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link href="../imagens/logo/integrado%20paleta.png" rel="shortcut icon">

    <!-- Validação do formulário em telefone e e-mail para verificar se o usuário preencheu os dois campos -->
    <script>
        function validacaoFormulario() {
            <!-- Pega o caminho para coletar o valor dos campos -->
            var telefone = document.getElementById('telefone').value;
            var email = document.getElementById('email').value;

            <!-- Se os campos estiverem vazios, é alertado um erro -->
            if (telefone.trim() === '' || email.trim() === '') {
                alert('Por favor, preencha todos os campos obrigatórios.');
                return false;
            } return true;
        }
    </script>
</head>
<body class="d-flex flex-column justify-content-center align-items-center bg-dark text-white">

    <!-- Inserção da navbar -->
    <?php  include "../components/navbar.php"; ?>

    <!-- Início do formulário -->
    <form class="d-flex flex-column align-items-center px-3 pt-3" method="POST" onsubmit="return validarFormulario();">

        <!-- Cabeçalho do formulário -->
        <div class="d-flex flex-column align-items-center mb-3">
            <h3 style="font-weight: bold">Ótimo! Vamos começar então</h3>
            <p style="text-align: center; font-weight: lighter; line-height: normal " >Que bom que encontrou um curso legal para você. Antes de te matricular nele, preciso de algumas informações...</p>
        </div>

        <!-- Campo de nome -->
        <div class="d-flex flex-column justify-content-center align-items-center mb-4 ">
            <label class="form-label" for="nome-completo">Nome completo</label>
            <input type="text" name="nome" id="nome-completo" placeholder="Digite seu nome completo" class="form-control"/>
        </div>

        <!-- Campo de e-mail -->
        <div class="d-flex flex-column justify-content-center align-items-center mb-4">
            <label class="form-label" for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="Digite seu melhor e-mail" class="form-control"/>
        </div>

        <!-- Campo de telefone -->
        <div class="d-flex flex-column justify-content-center align-items-center">
            <label class="form-label" for="telefone">Telefone</label>
            <input type="number" name="telefone" id="telefone" placeholder="Digite no Formato (DDD) 99999-9999" class="form-control"/>
        </div>

        <!-- Botão de envio do formulário -->
        <?php
        include "../components/botoes/botao-enviar-forms.php";
        ?>
    </form>

    <!-- CDN para importar funções Javascript do Bootstrap e do Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>