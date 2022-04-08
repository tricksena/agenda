<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cadastro de contato </title>

    <link rel="stylesheet" href="../includes/styles/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="shortcut icon" href="../includes/img/phone-solid-24.png" type="image/x-icon">

</head>
<body>

    <h1> Cadastro </h1>

    <form action="./receive.php" method="post">
        <label> Nome: <input type="text" name="nome" > </label> <br>
        <label> Telefone: <input type="text" name="telefone" > </label> <br>
        <label> Email: <input type="email" name="email">

        <input type="submit" style="color:green" value="enviar"> </input>
    </form>

    <a href="./index.php">
        <button>voltar</button>
    </a>

</body>
</html>