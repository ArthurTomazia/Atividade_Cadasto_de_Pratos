<?php

$host = "localhost";
$usuario = "root";
$senha = "root";
$banco = "restaurante_tolin_m1";

$usuario_compra = "id_usuario";
$nome = "nome";
$descricao = "descricao";
$preco = "preco";
$categoria = "categoria";

$conexao = new mysqli($host, $usuario, $senha, $banco, $nome, $descricao, $preco, $categoria, $prato, $usuario_compra);

if ($conexao->connect_error) {
    die("Erro na conexão com o banco: " . $conexao->connect_error);
};

$conexao->set_charset("utf8mb4");