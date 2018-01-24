<?php
declare(strict_types = 1);
require 'Agencia.php';

$num = 42;
$nom = "Registro";

$agencia = new Agencia($num, $nom);

echo "Agencia: $agencia->numero - $agencia->nome" . PHP_EOL;
