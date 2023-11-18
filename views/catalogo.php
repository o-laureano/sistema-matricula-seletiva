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
        <img src="../imagens/logo/logo-integrado.png" style="width: 200px" alt="logo-integrado">
        <?php
        include "../components/botoes/botao-minhas-matriculas.php";
        ?>
    </div>
    <div class="container d-flex flex-column align-items-center bg-dark rounded-top-4 pt-4 m-0 gap-4" style="height: 100vh">
        <div class="d-flex flex-column align-items-center justify-content-center">
            <p class="fs-5 text-white">Escolha o nível</p>
            <div class="d-flex align-items-center gap-2">
                <?php
                include "../components/botoes/botao-graduacao.php";
                include "../components/botoes/botao-pos-graduacao.php";
                ?>
            </div>
        </div>
        <div class="d-flex flex-column align-items-center justify-content-center">
            <p class="fs-5 text-white">Escolha a modalidade de estudo</p>
            <div class="d-flex align-items-center gap-2">
                <?php
                include "../components/botoes/botao-modalidade.php";
                ?>
            </div>
        </div>
        <div class="d-flex flex-column align-items-center justify-content-center">
            <p class="fs-5 text-white">Busque pelo seu curso</p>
            <div class="input-group">
                <?php
                include "../components/inputs/input-busca.php";
                ?>
            </div>
        </div>
        <div class="d-flex card mb-3" style="max-width: 540px;">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-4">
                        <img src="../imagens/cursos/ADS.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-6">
                        <div class="card-body">
                            <h5 class="card-title">Análise e Desenvolvimento de Sistemas</h5>
                            <p class="card-text"><small class="text-body-secondary">Disponível nas modalidades: Presencial | Semipresencial | EAD</small></p>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                            <div>
                                <p class="card-text">Investimento: R$757,50 40%OFF</p>
                                <a class="btn btn-primary btn-sm" href="catalogo.php" role="button">Ver cursos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>