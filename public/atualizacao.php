<?php

include "../infra/conexao.php";

$id = $_POST["id"];
$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];

$sql = "UPDATE livros SET nome='$nome',descricao='$descricao',preco='$preco' WHERE id = '$id'";

mysqli_query($conexao, $sql);
header("Location: ../index.php");