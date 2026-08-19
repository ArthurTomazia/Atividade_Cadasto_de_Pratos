<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Cadastrar Pratos</h1>

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



</body>
</html>

<?php

?>