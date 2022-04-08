<?php

$endereco = 'localhost';
$banco = 'agenda';
$usuario = 'postgres';
$senha = '123';



$pdo = new PDO("pgsql:host=$endereco;port=5433;dbname=$banco", $usuario, $senha, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

echo "Conectado no banco de dados!";

?>