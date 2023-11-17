<?php
$host = "localhost";
$nome = "sistema_matricula";
$usuario = "root";
$senha = "";

$database = new PDO("mysql:host=$host;dbname=$nome", $usuario, $senha);

$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);