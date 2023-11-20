<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


require_once '..\funcoes\ConexaoBD.php';

$id_aluno = $_GET['id_aluno'] ?? null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $caminho_documento = "";

    if (isset($_FILES['arquivo']) && $_FILES['arquivo']['error'] === UPLOAD_ERR_OK) {
        $caminho_destino = '\database\documentos';
        $nome_arquivo = $_FILES['arquivo']['name'];
        $caminho_arquivo = $caminho_destino . $nome_arquivo;

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body class="d-flex flex-column justify-content-center align-items-center bg-dark text-white">
    <form class="d-flex flex-column align-items-center px-3" enctype="multipart/form-data">
        <div class="d-flex flex-column align-items-center">
            <h3 style="font-weight: bold">Só mais um passo!</h3>
            <p style="text-align: center; font-weight: lighter; line-height: normal " >Só precisamos da foto, frente e verso, de algum documento de identificação. que pertença à você. Pode ser RG, CPF ou CNH.</p>
        </div>
        <div class="mb-3">
            <input class="form-control form-control-sm" name="arquivo" id="formFileSm" type="file">
        </div>
        <?php
        include "../components/botoes/botao-enviar-forms.php";
        ?>
    </form>
</body>
</html>