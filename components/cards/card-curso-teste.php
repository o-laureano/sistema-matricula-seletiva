<?php

require_once ('..\funcoes\ConexaoBD.php');
require_once ('..\funcoes\InfoCurso.php');

$id_aluno = 1;
$informacoes = puxarInfoCurso($id_aluno);

if ($informacoes) {
    echo '
    <div class="card mb-3 border-0" style="max-width: 540px; background-color: transparent">
        <div class="row g-0" style="width: 100%">
            <div class="col-3 p-0 m-0">
                <img src="../imagens/cursos/ADS.png" class="img-fluid rounded-3 imagem-curso" alt="..." style="object-fit: cover; height: 100%;">
            </div>
            <div class="col-9 ps-2">
                <div class="card-body d-flex flex-column p-0 m-0">
                    <h5 class="card-title p-0 m-0 text-white" style="font-size: 14px; font-weight: bold">' . $informacoes[0]['nome'] . '</h5>
                    <p class="card-text p-0 m-0 text-white " style="font-size: 10px; font-weight: lighter">Modalidades: ' . $informacoes[0]['modalidades'] . '</p>
                    <p class="card-text p-0 m-0 lh-1 text-white" style="font-size: 12px; font-weight: lighter">' . $informacoes[0]['descricao'] . '</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="card-text text-white" style="font-size: 14px; margin: 0;">Investimento: <strong>R$' . $informacoes[0]['valor_parcela'] . '</strong></p>
                        <a class="btn btn-primary btn-sm" href="curso-tech.php" role="button">Ver cursos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>';
} else {
    echo '<p class="text-white">Curso não encontrado.</p>';
}
?>