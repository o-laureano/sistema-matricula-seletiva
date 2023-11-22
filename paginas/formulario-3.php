<?php

//<!-- Ativando a exibição de erros no PHP -->
error_reporting(E_ALL);
ini_set('display_errors', 1);


//<!-- Inclusão das funções de conexão com o banco de dados -->
require_once '..\funcoes\ConexaoBD.php';

//<!-- Atribui o valor da id_aluno da URL para uma variável. Se não houver esse dado, é tida como null -->
$id_aluno = $_GET['id_aluno'] ?? null;

//<!-- Verificação se o formulário usa método POST para enviar dados -->
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    //<!-- Define a variável caminho_documento como vazia -->
    $caminho_documento = "";

    //<!-- Verifica se o envio do arquivo no input do formulário foi sucedido-->
    if (isset($_FILES['arquivo']) && $_FILES['arquivo']['error'] === UPLOAD_ERR_OK) {

        //<!-- Atribuição da pasta destino que irá o arquivo, pela o nome do arquivo enviado e une os dois -->
        $caminho_destino = '\database\documentos';
        $nome_arquivo = $_FILES['arquivo']['name'];
        $caminho_arquivo = $caminho_destino . $nome_arquivo;

        //<!-- Verificação da transferência do arquivo para o caminho usando a função InserirArquivo. Tanto se der certo quanto der errado, o usuário é alertado -->
        if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $caminho_arquivo)) {
            InserirCaminhoDocumento($caminho_arquivo, $id_aluno);
            echo '<script>alert("Arquivo enviado com sucesso!");</script>';
        } else {
            echo '<script>alert("Erro ao mover o arquivo!");</script>';
        }
    } else {
        echo 'Erro durante o upload: ' . $_FILES['arquivo']['error'];
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
</head>
<body class="d-flex flex-column justify-content-center align-items-center bg-dark text-white">

    <!-- Inserção da navbar -->
    <?php  include "../components/navbar.php"; ?>

    <!-- Início do formulário -->
    <form class="d-flex flex-column align-items-center px-3 pt-3" enctype="multipart/form-data">

        <!-- Cabeçalho do formulário -->
        <div class="d-flex flex-column align-items-center">
            <h3 style="font-weight: bold">Só mais um passo!</h3>
            <p style="text-align: center; font-weight: lighter; line-height: normal " >Só precisamos da foto, frente e verso, de algum documento de identificação. que pertença à você. Pode ser RG, CPF ou CNH.</p>
        </div>

        <!-- Input de arquivo (documento) -->
        <div class="">
            <input class="form-control form-control-sm p-0" name="arquivo" id="formFileSm" type="file">
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