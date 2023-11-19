<?php
$host = "localhost";
$nome = "sistema_matricula";
$usuario = "root";
$senha = "";

$conexao = new PDO("mysql:host=$host;dbname=$nome", $usuario, $senha);

$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "SELECT nome, descricao FROM curso";
$consulta = $conexao->prepare($sql);
$consulta->execute();
$resultados = $consulta->fetchAll(PDO::FETCH_ASSOC);

echo "<table>";
echo "<tr><th>ID</th><th>Nome</th></tr>";

foreach ($resultados as $resultado) {
    echo "<tr><td>" . $resultado['nome'] . "</td><td>" . $resultado['descricao'] . "</td></tr>";
}

echo "</table>";