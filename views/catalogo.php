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
<body class="d-flex flex-column gap-3 pt-4">
    <div class="container d-flex flex-column align-items-center justify-content-center gap-0">
        <img src="../imagens/logo/logo-integrado.png" alt="logo-integrado" style="width: 200px">
        <?php
        include "../components/botoes/botao-minhas-matriculas.php";
        ?>
    </div>
    <div class="container d-flex flex-column align-items-center bg-dark rounded-top-4 pt-4 m-0 gap-4" style="height: 100vh">
        <div class="d-flex flex-column align-items-center justify-content-center">
            <p class="fs-6 text-white">Escolha o nível</p>
            <div class="d-flex align-items-center gap-2">
                <?php
                include "../components/botoes/botao-graduacao.php";
                include "../components/botoes/botao-pos-graduacao.php";
                ?>
            </div>
        </div>
        <div class="d-flex flex-column align-items-center justify-content-center">
            <p class="fs-6 text-white">Escolha a modalidade de estudo</p>
            <div class="d-flex align-items-center gap-2">
                <?php
                include "../components/botoes/botao-modalidade.php";
                ?>
            </div>
        </div>
        <div class="d-flex flex-column align-items-center justify-content-center">
            <p class="fs-6 text-white">Busque pelo seu curso</p>
            <div class="input-group">
                <?php
                include "../components/inputs/input-busca.php";
                ?>
            </div>
        </div>
        <div class="d-flex card mb-3" style="max-width: 540px; background-color: transparent">
            <?php
            include "../components/cards/card-curso-ads.php";
            ?>
        </div>
    </div>
</body>
</html>