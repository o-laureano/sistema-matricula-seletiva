<?php

include('..\funcoes\ConexaoBD.php');

function puxarInfoCurso($id_curso) {
    $conexao = ConexaoBD();

    $selecao = "SELECT * FROM curso WHERE id_curso = :id_curso";
    $comando = $conexao->prepare($selecao);
    $comando->bindParam(':id_curso', $id_curso);
    $comando->execute();

    $cursos = $comando->fetchAll(PDO::FETCH_ASSOC);

    $comando->closeCursor();
    $conexao = null;

    return $cursos;
}
?>

<!--$sql = "SELECT * FROM curso WHERE id_curso=1;";-->
<!--$resultado = $conexao->query($sql);-->
<!---->
<!--$cursos = $resultado->fetchAll();-->
<!---->
<!--$conexao = null;-->
<!---->
<!--return $cursos;-->
