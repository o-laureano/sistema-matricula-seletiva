<?php
function ConexaoBD() {
    $conexao = new PDO("mysql:host=localhost;dbname=sistema_matricula", "root", "");

    $sql = "SELECT * FROM curso WHERE id_curso=1;";
    $resultado = $conexao->query($sql);

    $cursos = $resultado->fetchAll();

    $conexao = null;

    return $cursos;
}

?>