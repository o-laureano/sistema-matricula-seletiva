<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Matricule-se já!</title>
</head>
<body>

<?php
// Incluir suas classes e lógica para obter dados do banco de dados aqui
require_once '..\models\aluno.php';
require_once '..\models\curso.php';

// Criar instância de Aluno (substitua esses valores pelos reais)
$aluno = new Aluno("Nome do Aluno", "email@example.com", "123456789", "12345678901", "12345678", "1990-01-01", "caminho_documento");

// Criar instância de Curso (substitua esses valores pelos reais)
$curso = new Curso("Descrição do Curso", 1, 1, 1000.00, 12, 12000.00, "Classificação", 24, 1, "caminho_imagem");
?>

<!-- Exibir detalhes do Aluno -->
<h2>Detalhes do Aluno:</h2>
<p>Nome: <?php echo $aluno->getNome(); ?></p>
<p>Email: <?php echo $aluno->getEmail(); ?></p>
<!-- Adicione outros detalhes do aluno conforme necessário -->

<!-- Exibir detalhes do Curso -->
<h2>Detalhes do Curso:</h2>
<p>Descrição: <?php echo $curso->getDescricao(); ?></p>
<p>Valor da Parcela: <?php echo $curso->getValorParcela(); ?></p>
<!-- Adicione outros detalhes do curso conforme necessário -->

</body>
</html>