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
    <form class="d-flex flex-column align-items-center px-3 ">
        <div class="d-flex flex-column align-items-center">
            <h3>Ótimo! Vamos começar então</h3>
            <p style="text-align: center">Que bom que encontrou um curso legal para você. Antes de te matricular nele, preciso de algumas informações...</p>
        </div>
        <div class="d-flex flex-column justify-content-center align-items-center mb-4">
            <label class="form-label" for="nome-completo">Nome completo</label>
            <input type="text" id="nome-completo" placeholder="Digite seu nome completo" class="form-control"/>
        </div>
        <div class="d-flex flex-column justify-content-center align-items-center mb-4">
            <label class="form-label" for="email">Email address</label>
            <input type="email" id="email" placeholder="Digite no Formato (DDD) 99999-9999" class="form-control"/>
        </div>
        <div class="d-flex flex-column justify-content-center align-items-center mb-4">
            <label class="form-label" for="telefone">Telefone celular</label>
            <input type="number" id="telefone" placeholder="Digite seu melhor e-mail" class="form-control"/>
        </div>
        <?php
        include "../components/botoes/botao-enviar-forms.php";
        include "../components/botoes/botao-voltar-forms.php";
        ?>
    </form>
</body>
</html>