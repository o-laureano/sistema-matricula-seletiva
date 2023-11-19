<?php
require_once '..\models\ConexaoBancoDeDados.php';
require_once '..\models\curso.php';

$bancoDeDados = new ConexaoBancoDeDados('localhost', 'sistema_matricula', 'root', '');

$idCurso = 1;
$sql = "SELECT * FROM curso WHERE id_curso = $idCurso";

$resultados = $bancoDeDados->consultaDados($sql);

foreach ($resultados as $resultado) {
    $curso = new Curso();
    $curso->populate($resultado);
}

$bancoDeDados->fecharConexao();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Curso</title>
    <!-- Seus estilos CSS e outros cabeçalhos aqui -->
</head>
<body>
<!-- Seu conteúdo HTML aqui -->
<div>
    <h1>Detalhes do Curso</h1>
    <p>ID do Curso: <?= $curso->getIdCurso() ?></p>
    <p>Descrição: <?= $curso->getDescricao() ?></p>
    <!-- Adicionar outras informações do curso aqui -->
</div>
<!-- Seus scripts JavaScript e outros elementos do corpo aqui -->
</body>
</html>