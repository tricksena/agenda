<?php require_once "conectar.php" ?>
<?php require_once "Contato.php" ?>

<?php

 // função inserir 
    function inserir($pdo, $contato) {
        $sql = "INSERT INTO contatos(nome, telefone, email) VALUES ('$contato->nome'
                                                                    '$contato->telefone'
                                                                    '$contato->email')";

        $resultado = pg_query($pdo, $sql);
        return $resultado;
    }

?>