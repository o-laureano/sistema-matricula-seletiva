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
            <h3>Só mais um passo!</h3>
            <p style="text-align: center">Só precisamos da foto, frente e verso, de algum documento de identificação. que pertença à você. Pode ser RG, CPF ou CNH.</p>
        </div>
        <div class="mb-3">
            <label for="formFileSm" class="form-label">Small file input example</label>
            <input class="form-control form-control-sm" id="formFileSm" type="file">
        </div>
        <?php
        include "../components/botoes/botao-enviar-forms.php";
        include "../components/botoes/botao-voltar-forms.php";
        ?>
    </form>
</body>
</html>