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
    <link href="../imagens/logo/integrado%20paleta.png" rel="shortcut icon">
</head>
<body class="d-flex flex-column justify-content-center align-items-center bg-dark text-white">

<!-- Inserção da navbar -->
<?php  include "../components/navbar.php"; ?>

    <!-- Tabela em que serão armezenados as matrículas feitas -->
    <div class="d-flex flex-column align-items-center pt-4">
        <h3>Minhas matrículas</h3>
        <p style="text-align: center">Aqui você pode visulizar todas as mastrículas que já realizou em nossa instituição.</p>
    </div>
    <table class="table table-borderless table-sm text-white table-dark">
        <thead>
        <tr>
            <th scope="col">Curso</th>
            <th scope="col">Data</th>
            <th scope="col">Código</th>
            <th scope="col">Ações</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">Administração</th>
            <td>21/11</td>
            <td><a href="#">10001</a></td>
            <td><a href="#">Visualizar</a></td>
        </tr>
        <tr>
            <th scope="row">Psicologia</th>
            <td>19/11</td>
            <td><a href="#">10002</a></td>
            <td><a href="#">Visualizar</a></td>
        </tr>
        </tbody>
    </table>

    <!-- CDN para importar funções Javascript do Bootstrap e do Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>