<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Matricule-se já!</title>

    <!-- CDN para importar o CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Referência ao style.css -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Importação das fontes pelo Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link href="../imagens/logo/integrado%20paleta.png" rel="shortcut icon">
</head>
<body class="d-flex flex-column align-items-center justify-content-center">

<!-- Inclusão da barra de navegação -->
<?php  include "../components/navbar.php"; ?>

<!-- Conteúdo principal da página -->
<div class="container d-flex flex-column align-items-center justify-content-center mt-3">
    <!-- Logo do Integrado -->
    <img src="../imagens/logo/logo-integrado.png" style="width: 200px" alt="logo-integrado">
    <!-- ~Botão para ter acesso ao catálogo de cursos -->
    <div class="container d-flex flex-column align-items-center justify-content-center">
        <?php include "../components/botoes/botao-ver-cursos.php"; ?>
    </div>
</div>

<!-- CDN para importar funções Javascript do Bootstrap e do Popper -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>