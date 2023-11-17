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
        include "../components/botao-minhas-matriculas.php";
        ?>
    </div>
    <div class="container d-flex flex-column align-items-center bg-dark rounded-top-4 pt-4 m-0 gap-4" style="height: 100vh">
        <div class="d-flex flex-column align-items-center justify-content-center">
            <p class="fs-5 text-white">Escolha o nível</p>
            <div class="d-flex align-items-center gap-2">
                <div>
                    <input type="radio" class="btn-check" name="options-outlined" id="success-outlined" autocomplete="off" checked>
                    <label class="btn btn-outline-success" for="success-outlined">Graduação</label>
                </div>
                <div>
                    <input type="radio" class="btn-check" name="options-outlined" id="danger-outlined" autocomplete="off">
                    <label class="btn btn-outline-danger" for="danger-outlined">Pós-graduação</label>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column align-items-center justify-content-center">
            <p class="fs-5 text-white">Escolha a modalidade de estudo</p>
            <div class="d-flex align-items-center gap-2">
                <div>
                    <input type="checkbox" class="btn-check" id="presencial-check" autocomplete="off">
                    <label class="btn btn-outline-primary" for="presencial-check">Presencial</label><br>
                </div>
                <div>
                    <input type="checkbox" class="btn-check" id="semipresencial-check" autocomplete="off">
                    <label class="btn btn-outline-primary" for="semipresencial-check">Semipresencial</label><br>
                </div>
                <div>
                    <input type="checkbox" class="btn-check" id="ead-check" autocomplete="off">
                    <label class="btn btn-outline-primary" for="ead-check">EAD</label><br>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column align-items-center justify-content-center">
            <p class="fs-5 text-white">Busque pelo seu curso</p>
            <div class="input-group">
                <input type="search" class="form-control rounded" placeholder="Digite o nome do curso" aria-label="Search" aria-describedby="search-addon" />
                <button type="button" class="btn btn-outline-primary">Buscar</button>
            </div>
        </div>
    </div>
</body>
</html>