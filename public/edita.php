<?php

include "../infra/conexao.php";

$id = $_GET["id"];
$sql = "SELECT * FROM livros WHERE id = $id";
$resultado = mysqli_query($conexao, $sql );

$livro =mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante Tolin</title>
    <link rel="stylesheet" href="../style/styles.css">
</head>


  <body>
    <header>
        <h1>Restaurante Tolin</h1>
    </header>
    <main>
        <h2>Editando o Prato <?php echo $prato["prato"]?>!</h2>
        <form action="atualizar.php" method="POST">
            <input type="hidden" name="id_prato" value="<?php echo $prato["id_prato"]?>">

            <label for="titulo">Usuário:</label>
            <input type="text" name="usuario_compra" value="<?php echo $prato["usuario_compra"]?>">
            <br>
            <label for="titulo">Nome do prato:</label>
            <input type="text" name="nome" value="<?php echo $prato["nome"]?>">
            <br>
            <label for="autor">Descrição do prato:</label>
            <input type="text" name="descricao" value="<?php echo $prato["descricao"]?>">
            <br>
            <label for="ano">Preço do prato:</label>
            <input type="number" name="preco" value="<?php echo $prato["preco"]?>">
            <br>
            <label for="ano">Categoria do prato:</label>
            <input type="number" name="categoria" value="<?php echo $prato["categoria"]?>">
            <br>
            <button type="submit">Atualizar</button>
        </form>

    </main>
    <footer>

    </footer>

    

</body>

</html>