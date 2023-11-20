<?php
$presencial = "Presencial";
$semipresencial = "Semipresencial";
$ead = "EAD";

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

foreach ($modalidades as $modalidade) {
    echo '<input type="checkbox" class="btn-check" id="' . $modalidade["id"] . '" autocomplete="off">
  <label class="btn btn-outline-primary" for="' . $modalidade["id"] . '">' . $modalidade["label"] . '</label><br>';
}
?>
