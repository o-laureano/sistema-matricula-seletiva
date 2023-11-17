<?php
global $database;
require_once "..\database\database.php";

$sql = "SELECT * FROM aluno";
$result = $database->query($sql);

// Percorre os resultados

foreach ($result as $row) {
    // Imprime os dados do registro
    echo $row['nome'] . " " . $row['email'] . "<br>";
}
