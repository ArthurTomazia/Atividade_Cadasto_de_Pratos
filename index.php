<?php

include "infra/conexao.php";
$pratos = mysqli_query($conexao, "SELECT * FROM prato");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante Tolin</title>
    <link rel="stylesheet" href="style/styles.css">
</head>

<body>
<div class="body-index">
    

    <div class="caixa">
        <p>
            <button><a href="public/cadastrarUsuario.php">Cadastrar Usuario</a></button>
            <button><a href="public/cadastrarPrato.php">Novo Prato</a></button>
        </p>



    </div>






    <h1>Ver Prato</h1>

    <form action="public/cadastrar.php" method="POST">
        <label for="nome">Nome do Prato:</label>
        <input type="text" name="nome">
        <br>
        <label for="descricao">Descrição do Prato</label>
        <input type="text" name="descricao">
        <br>
        <label for="preco">Preço do Prato</label>
        <input type="text" name="preco">
        <br>
        <label for="categoria">Categoria do Prato</label>
        <input type="text" name="categoria">
        <br>
        <label for="usuario_compra">Usuário que comprou o prato</label>
        <input type="text" name="usuario_compra">
        <br>
        <button type="submit">Fazer Pedido</button>
    </form>
   

</div>
</body>

</html>