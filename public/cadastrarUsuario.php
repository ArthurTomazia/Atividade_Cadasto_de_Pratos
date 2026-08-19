<?php

include "../infra/conexao.php";
$pratos = mysqli_query($conexao, "SELECT * FROM prato");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Usuário</title>
    <link rel="stylesheet" href="style/styles.css">
</head>

<body>
    

    <h1>Cadastrar Usuário</h1>

    <form action="public/cadastrar.php" method="POST">
        <label for="nome">Nome do usuário:</label>
        <input type="text" name="nome">
        <br>
        <label for="emial">Email do usuário:</label>
        <input type="text" name="emial">
        <button type="submit">Cadastar usuário</button>
    </form>
   


</body>

</html>