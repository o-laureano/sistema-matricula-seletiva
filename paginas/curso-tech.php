<?php
include('..\funcoes\ConexaoBD.php');
$cursos=ConexaoBD();
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Matricule-se já!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:wght@300;400;700&display=swap" rel="stylesheet">

</head>
<body class="d-flex flex-column align-items-center justify-content-center bg-dark">

<div>
    <img src="../imagens/cursos/ADS.png" alt="" style="width: 100%; top: 0; left: 0; position: fixed; max-height: 176px; object-fit: cover">
</div>
<div class="d-flex flex-column justify-content-center">
    <?php foreach ($cursos as $curso): ?>
        <div class="d-flex justify-content-center">
            <p style="color: white"><?php echo $curso['duracao']; ?> anos</p>
            <p style="color: white">Tecnólogo</p>
        </div>
        <div class="d-flex flex-column">
            <p style="color: white"><?php echo $curso['nome']; ?></p>
            <p style="color: white"><?php echo $curso['descricao']; ?></p>
        </div>
        <div class="d-flex flex-column">
            <p style="color: white">Investimento:</p>
            <p style="color: white"> R$ <?php echo $curso['valor_parcela']; ?> </p>
        </div>
        <div class="d-flex flex-column justify-content-center">
            <?php
            include "../components/botoes/botao-fazer-matricula.php";
            ?>
        </div>
    <?php endforeach; ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>