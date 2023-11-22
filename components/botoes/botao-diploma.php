<?php

/*Definindo varáveis de cada modalidade*/
$graduacao = "Graduação";
$posgraduacao = "Pós-graduação";

/*Criação da array*/
$diplomas = [
    [
        "id" => "posgraduacao-check",
        "label" => $posgraduacao,
    ],
    [
        "id" => "graduacao-check",
        "label" => $graduacao,
    ]
];

/*Percorre a array passando valores*/
foreach ($diplomas as $diploma) {

    /*Formação do echo que chama o botão*/
    echo '<input type="radio" class="btn-check" name="options-outlined" id="' . $diploma["id"] . '" autocomplete="off" checked>
  <label class="btn btn-sm px-3 mx-1 btn-outline-info rounded-pill" for="' . $diploma["id"] . '">' . $diploma["label"] . '</label><br>';
}

?>