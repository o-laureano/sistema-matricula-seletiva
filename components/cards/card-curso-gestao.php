<?php

/*Atrbuição do id_curso para a função*/
$id_curso=3;

/*Chamada da função*/
$curso = InfosCursos($id_curso);

/*Formação do echo que chama o botão*/
echo
    '<div class="card mb-3 border-0" style="max-width: 540px; background-color: transparent">
            <div class="row g-0" style="width: 100%">
                <div class="col-3 p-0 m-0">
                    <img src="'.$curso['imagem'].'" class="img-fluid rounded-3 imagem-curso" alt="..." style="object-fit: cover; height: 100%;">
            </div>
            <div class="col-9 ps-2">
            <div class="card-body d-flex flex-column p-0 m-0 ">
                <h5 class="card-title p-0 m-0 text-white" style="font-size: 14px; font-weight: bold" >'.$curso['nome'].'</h5>
                <p class="card-text pb-1 m-0 text-white " style="font-size: 10px; font-weight: lighter">Modalidades: Presencial | Semipresencial | EAD</p>
                <p class="card-text p-0 m-0 lh-1 text-white fw-light" style="font-size: 12px; font-weight: lighter">'.$curso['descricao'].'</p>
                <div class="d-flex justify-content-between align-items-center">
                    <p class="card-text text-white" style="font-size: 14px; margin: 0;">Investimento: <strong>'.$curso['quantidade_parcelas'].'x R$'.$curso['valor_parcela'].'</strong></p>
                    <a class="btn btn-primary btn-sm" href="curso-tech.php" role="button">Ver cursos</a>
                </div>
            </div>
        </div>
    </div>
</div>';
?>