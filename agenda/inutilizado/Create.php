<?php
    require '../src/conectar.php';

    if($_SERVER["REQUEST_METHOD"]== "POST"){
        $nomeErro = null;
        $telefoneErro = null;
        $emailErro = null;
    }

//validação de campos
    if (!empty($_POST)){
        $validacao = true;
        $novoContato = false;
        if(!empty($_POST['nome'])){
        $nome = $_POST ['nome'];
        }else{
            $nomeErro = ' Por favor digite o seu nome !';
            $validacao = false;
        }

        if(!empty($_POST['telefone'])){
        $telefone = $_POST ['telefone'];
        }else{
            $telefoneErro = ' Por favor digite o seu telefone !';
            $validacao =false;
        }

        if(!empty($_POST['email'])){
            $email = $_POST ['email'];
            }else{
                $emailErro = ' Por favor digite o seu email !';
                $validacao =false;
            }
//inserir no BD
            if ($validacao){
                $pdo = conectar :: conectar();
                $pdo->setAtributes(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $postgres= "INSERT INTO contatos(cod, nome, telefone, email)
                    VALUES (?, ?, ?, ?)";
                $q = $pdo->prepare($postgres);
                $q->execute(array($nome, $telefone, $email));
                conectar::desconectar();
                header("location:index.php");
            }
}
?>


