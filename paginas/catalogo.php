<!-- Inclusão das funções de conexão com o banco de dados -->
<?php include '../funcoes/ConexaoBD.php'; ?>

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Favicon -->
    <link href="../imagens/logo/integrado%20paleta.png" rel="shortcut icon">
</head>
<body class="d-flex flex-column gap-3 pt-4">

    <!-- Header com logo e Navbar -->
    <header class="container d-flex d-sm-flex flex-lg-column align-items-center justify-content-center gap-3">
        <img src="../imagens/logo/logo-integrado.png" alt="logo-integrado" class="logo-integrado" <!--style="width: 200px"-->
        <?php  include "../components/navbar.php"; ?>
    </header>

    <!-- Div que carreca todos os elementos do catálogo -->
    <div class="container-fluid d-flex flex-column align-items-center bg-dark rounded-top-4 pt-4 gap-4" style="height: 100vh; overflow-y: auto;">

        <!-- Seção que carrega os botões de filtragem -->
        <div class="d-flex flex-column align-items-center justify-content-center">

            <!-- Escolha do grau de diploma -->
            <div class="d-flex flex-column align-items-center gap-2 pb-3">
                <p class="fs-6 text-white m-0">Escolha o nível</p>
                    <div class="d-flex flex-row-reverse">
                        <?php include "../components/botoes/botao-diploma.php"; ?>
                    </div>
            </div>

            <!-- Escolha do grau da modalidade de estudo -->
            <div class="d-flex flex-column align-items-center gap-2 pb-3">
                <p class="fs-6 text-white m-0">Escolha a modalidade de estudo</p>
                    <div class="d-flex gap-1">
                        <?php include "../components/botoes/botao-modalidade.php"; ?>
                    </div>
            </div>

            <!-- Barra de pesquisa para buscar curso específico -->
            <div class="input-group justify-content-center gap-2">
            <p class="fs-6 text-white m-0">Busque pelo seu curso</p>
                <?php include "../components/inputs/input-busca.php"; ?>
            </div>
        </div>

        <!-- Div que carrega os cards de cada curso -->
        <div class="d-flex card mb-3 border-0 gap-3" style="max-width: 540px; background-color: transparent">
            <?php
            include "../components/cards/card-curso-tech.php";
            include "../components/cards/card-curso-saude.php";
            include "../components/cards/card-curso-humanas.php";
            include "../components/cards/card-curso-gestao.php";
            include "../components/cards/card-curso-engenharia.php";
            ?>
        </div>
    </div>

    <!-- CDN para importar funções Javascript do Bootstrap e do Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>