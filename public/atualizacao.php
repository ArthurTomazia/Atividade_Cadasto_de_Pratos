<?php

include "../infra/conexao.php";

$id_prato = $_POST["id_prato"];
$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$categoria = $_POST["categoria"];
$usuario_compra = $_POST["usuario_compra"];


$sql = "UPDATE prato SET nome='$nome',descricao='$descricao',preco='$preco',categoria='$categoria',usuario_compra='$usuario_compra' WHERE id_prato = '$id_prato'";

mysqli_query($conexao, $sql);
header("Location: ../index.php");