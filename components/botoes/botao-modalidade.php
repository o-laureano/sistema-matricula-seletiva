<?php

/*Definindo varáveis de cada modalidade*/
$presencial = "Presencial";
$semipresencial = "Semipresencial";
$ead = "EAD";

/*Criação da array*/
$modalidades = [
    [
        "id" => "presencial-check",
        "label" => $presencial,
    ],
    [
        "id" => "semipresencial-check",
        "label" => $semipresencial,
    ],
    [
        "id" => "ead-check",
        "label" => $ead,
    ],
];

/*Percorre a array passando valores*/
foreach ($modalidades as $modalidade) {

    /*Formação do echo que chama o botão*/
    echo '<input type="checkbox" class="btn-check" id="' . $modalidade["id"] . '" autocomplete="off">
  <label class="btn btn-sm px-3 btn-outline-warning rounded-pill" for="' . $modalidade["id"] . '">' . $modalidade["label"] . '</label><br>';
}
?>
