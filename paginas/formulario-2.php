<?php
require_once '..\funcoes\ConexaoBD.php';

$id_aluno = isset($_GET['id_aluno']) ? $_GET['id_aluno'] : null;

    if ($_SERVER["REQUEST_METHOD"] === "POST") if (isset($_POST['data-nascimento'], $_POST['cpf'], $_POST['cep'])) {
        $dataNascimento = $_POST['data-nascimento'];
        $cpf = $_POST['cpf'];
        $cep = $_POST['cep'];

        InserirDadosFormulario2($dataNascimento, $cpf, $cep, $id_aluno);

        echo '<script>window.location.href = "formulario-3.php?id_aluno=' . $id_aluno . '";</script>';


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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <script>
        function validacaoFormulario2() {
            var cep = document.getElementById('cep').value;

            var regexCep = /^\d{8}(-\d{4})?$/;

            if(!regexCep.test(cep)) {
                alert('Digite um CEP válido (8 números).');
                return false;
            } return true;
        }

    </script>
</head>
<body class="d-flex flex-column justify-content-center align-items-center bg-dark text-white">
    <?php include "../components/navbar.php"; ?>
    <form class="d-flex flex-column align-items-center px-3 mt-3" method="POST" onsubmit="return validarFormulario2();">
        <div class="d-flex flex-column align-items-center mb-3">
            <h3 style="font-weight: bold">Maravilha! Só mais algumas...</h3>
            <p style="text-align: center; font-weight: lighter; line-height: normal ">Nos passe mais essas informações para podermos dar prosseguimento em sua matrícula</p>
        </div>
        <div class="d-flex flex-column justify-content-center align-items-center mb-4">
            <label class="form-label" for="data-nascimento">Data de nascimento</label>
            <input type="date" name="data-nascimento" id="data-nascimento" placeholder="Digite apenas números" class="form-control"/>
        </div>
        <div class="d-flex flex-column justify-content-center align-items-center mb-4">
            <label class="form-label" for="cpf">CPF</label>
            <input type="text" name="cpf" id="cpf" placeholder="Digite sem pontos e hífens" class="form-control"/>
        </div>
        <div class="d-flex flex-column justify-content-center align-items-center mb-4">
            <label class="form-label" for="cep">CEP</label>
            <input type="text" name="cep" id="cep" placeholder="Digite seu CEP" class="form-control"/>
        </div>
        <?php
        include "../components/botoes/botao-enviar-forms.php";
        ?>
    </form>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>