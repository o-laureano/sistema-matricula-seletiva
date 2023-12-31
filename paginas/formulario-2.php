<?php

//<!-- Inclusão das funções de conexão com o banco de dados -->
require_once '..\funcoes\ConexaoBD.php';

$id_aluno = isset($_GET['id_aluno']) ? $_GET['id_aluno'] : null;

    //<!-- Verificação se o formulário usa método POST para enviar dados -->
    if ($_SERVER["REQUEST_METHOD"] === "POST") if (isset($_POST['data-nascimento'], $_POST['cpf'], $_POST['cep'])) {

        //<!-- Atribuição dos valores inseridos no formulário para suas respectivas variáveis -->
        $dataNascimento = $_POST['data-nascimento'];
        $cpf = $_POST['cpf'];
        $cep = $_POST['cep'];

        //<!-- Função que chama a função InserirDados e adiciona os valores no banco de dados -->
        InserirDadosFormulario2($dataNascimento, $cpf, $cep, $id_aluno);

        //<!-- o usuário vai para a próxima página tendo seu id referenciado-->
        echo '<script>window.location.href = "formulario-3.php?id_aluno=' . $id_aluno . '";</script>';


    //<!-- Em caso de erro, é notificado que não tem a id do aluno na URL-->
    } else {
        echo 'Erro: id_aluno não encontrado na URL.';
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

    <!-- Validação do formulário no campo de CEP -->
    <script>
        function validacaoFormulario2() {

            <!-- Pega o caminho para coletar o valor dos campos -->
            var cep = document.getElementById('cep').value;

            <!-- É executado um Regex para validar se o valor possui 8 números -->
            var regexCep = /^\d{8}(-\d{4})?$/;

            <!-- Alerta de erro caso não seja inserido na formatação correta -->
            if(!regexCep.test(cep)) {
                alert('Digite um CEP válido (8 números).');
                return false;
            } return true;
        }

    </script>
</head>
<body class="d-flex flex-column justify-content-center align-items-center bg-dark text-white">

<!-- Inserção da navbar -->
<?php  include "../components/navbar.php"; ?>

    <!-- Início do formulário -->
    <form class="d-flex flex-column align-items-center px-3 pt-3" method="POST" onsubmit="return validarFormulario2();">

        <!-- Cabeçalho do formulário -->
        <div class="d-flex flex-column align-items-center mb-3">
            <h3 style="font-weight: bold">Maravilha! Só mais algumas...</h3>
            <p style="text-align: center; font-weight: lighter; line-height: normal ">Nos passe mais essas informações para podermos dar prosseguimento em sua matrícula</p>
        </div>

        <!-- Data de nascimento -->
        <div class="d-flex flex-column justify-content-center align-items-center mb-4">
            <label class="form-label" for="data-nascimento">Data de nascimento</label>
            <input type="date" name="data-nascimento" id="data-nascimento" placeholder="Digite apenas números" class="form-control"/>
        </div>

        <!-- CPF -->
        <div class="d-flex flex-column justify-content-center align-items-center mb-4">
            <label class="form-label" for="cpf">CPF</label>
            <input type="text" name="cpf" id="cpf" placeholder="Digite sem pontos e hífens" class="form-control"/>
        </div>

        <!-- CEP -->
        <div class="d-flex flex-column justify-content-center align-items-center">
            <label class="form-label" for="cep">CEP</label>
            <input type="text" name="cep" id="cep" placeholder="Digite seu CEP" class="form-control"/>
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