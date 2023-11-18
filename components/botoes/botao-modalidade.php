<?php
$presencial = "Presencial";
$semipresencial = "Semipresencial";
$ead = "EAD";

$checkboxes = [
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

foreach ($checkboxes as $checkbox) {
    echo '<input type="checkbox" class="btn-check" id="' . $checkbox["id"] . '" autocomplete="off">
  <label class="btn btn-outline-primary" for="' . $checkbox["id"] . '">' . $checkbox["label"] . '</label><br>';
}
?>
