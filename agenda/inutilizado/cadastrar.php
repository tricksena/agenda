<?php require "conectar.php" ?>
<?php require "Contato.php" ?>
<?php require "BancoBD.php" ?>


<?php

$contato = new Contato();
$contato->nome = $_POST['nome'];
$contato->telefone = $_POST['telefone'];
$contato->email = $_POST['email'];

if (inserir($pdo, $contato)) {
    echo "Inserido";
} else {
    echo "Erro" . pg_last_error();
}
