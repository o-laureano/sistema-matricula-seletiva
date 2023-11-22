<!-- Inclusão das funções de conexão com o banco de dados -->
<?php
include('..\funcoes\ConexaoBD.php');

//<!-- Chamada da função que puxa informações no banco insere na página -->
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

    <!-- Referência ao style.css -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Importação das fontes pelo Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- CDN para importar o CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- CDN para importar ícones do Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Favicon -->
    <link href="../imagens/logo/integrado%20paleta.png" rel="shortcut icon">
</head>

<body class="d-flex flex-column align-items-center justify-content-center bg-dark">

<!-- Banner do curso -->
<div>
    <img src="../imagens/cursos/ADS.png" alt="" style="width: 100%; top: 0; left: 0; position: fixed; max-height: 176px; object-fit: cover">
</div>

<!-- Div com as informações do curso -->
<div class="d-flex flex-column justify-content-center text-white text-center mx-4">

    <!-- Chamando a array de valores da curso e imprimindo elementos na tela -->
    <?php foreach ($cursos as $curso): ?>

        <!-- Duração e grau de diploma -->
        <div class="d-flex justify-content-center gap-1">
            <p class="m-2 fw-light"><i class="fa-regular fa-calendar px-2"></i><?php echo $curso['duracao']; ?> anos</p>
            <p class="m-2 fw-light"><i class="fa-solid fa-graduation-cap px-2"></i>Tecnólogo</p>
        </div>

        <!-- Nome do curso e descrição -->
        <div class="d-flex flex-column align-items-center">
            <h4 class="fw-semibold"><?php echo $curso['nome']; ?></h4>
            <p class="fw-light"><?php echo $curso['descricao']; ?></p>
        </div>

        <!-- Mensalidade do curso -->
        <div class="d-flex flex-column align-items-center">
            <p class="m-0">Investimento:</p>
            <p class="fs-4 fw-bold">12x R$ <?php echo $curso['valor_parcela']; ?></p>
        </div>

        <!-- Componentes que levam o usuário à primeira página de formulário de matrícula e a barra de navegação-->
        <div class="d-flex flex-column align-items-center gap-3">
            <?php
            include "../components/botoes/botao-fazer-matricula.php";
            include "../components/navbar.php";
            ?>
        </div>

    <!-- Finalização do percorrimento da array -->
    <?php endforeach; ?>
</div>

<!-- CDN para importar funções Javascript do Bootstrap e do Popper -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>