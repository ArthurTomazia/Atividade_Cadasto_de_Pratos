@@ -0,0 +1,69 @@
<?php

include "infra/conexao.php";
$livros = mysqli_query($conexao, "SELECT * FROM livros");

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
    <header>
        <h1>Restaurante Tolin</h1>
    </header>
    <main>
        <h2>Adicione um novo prato!</h2>
        <form action="public/cadastrar.php" method="POST">
            <label for="nome">Nome do prato:</label>
            <input type="text" name="nome">
            <br>
            <label for="descricao">Descrição do prato:</label>
            <input type="text" name="descricao">
            <br>
            <label for="preco">Preço do prato:</label>
            <input type="number" name="preco" step="0.01">
            <br>
            <button type="submit">Cadastrar</button>
        </form>
        <div>
            <h2>Pratos Cadastrados</h2>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Ações</th>
                </tr>
                <?php while ($prato = mysqli_fetch_assoc($pratos)) { ?>
                    <tr>
                        <td><?php echo $prato["id_prato"] ?></td>
                        <td><?php echo $prato["nome"] ?></td>
                        <td><?php echo $prato["descricao"] ?></td>
                        <td><?php echo $prato["preco"] ?></td>
                        <td>
                            <a href="public/editar.php?id=<?php echo $prato["id_prato"] ?>">Editar</a>
                            <a href="public/excluir.php?id=<?php echo $prato["id_prato"] ?>">Excluir</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>

    </main>
    <footer>

    </footer>


</body>

</html>