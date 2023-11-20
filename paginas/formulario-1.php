<?php
global $conexao;
require_once '..\funcoes\ConexaoBD.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['nome'], $_POST['email'], $_POST['telefone'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        $erros = ValidarDados($email, $telefone);

        if (empty($erros)) {

            $id_aluno=InserirDados($nome, $email, $telefone);

            if ($id_aluno!==null) {
                echo '<script>window.location.href = "formulario-2.php?id=id_aluno=' . $id_aluno . '";</script>';
            }
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <script>
        function validacaoFormulario() {
            var telefone = document.getElementById('telefone').value;
            var email = document.getElementById('email').value;

            if (telefone.trim() === '' || email.trim() === '') {
                alert('Por favor, preencha todos os campos obrigatórios.');
                return false;
            } return true;
        }
    </script>
</head>
<body class="d-flex flex-column justify-content-center align-items-center bg-dark text-white">
    <form class="d-flex flex-column align-items-center px-3" method="POST" onsubmit="return validarFormulario();">
        <div class="d-flex flex-column align-items-center mb-3">
            <h3 style="font-weight: bold">Ótimo! Vamos começar então</h3>
            <p style="text-align: center; font-weight: lighter; line-height: normal " >Que bom que encontrou um curso legal para você. Antes de te matricular nele, preciso de algumas informações...</p>
        </div>
        <div class="d-flex flex-column justify-content-center align-items-center mb-4 ">
            <label class="form-label" for="nome-completo">Nome completo</label>
            <input type="text" name="nome" id="nome-completo" placeholder="Digite seu nome completo" class="form-control"/>
        </div>
        <div class="d-flex flex-column justify-content-center align-items-center mb-4">
            <label class="form-label" for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="Digite seu melhor e-mail" class="form-control"/>
        </div>
        <div class="d-flex flex-column justify-content-center align-items-center mb-4">
            <label class="form-label" for="telefone">Telefone</label>
            <input type="number" name="telefone" id="telefone" placeholder="Digite no Formato (DDD) 99999-9999" class="form-control"/>
        <?php
        include "../components/botoes/botao-enviar-forms.php";
        ?>
    </form>
</body>
</html>