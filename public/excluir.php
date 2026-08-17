<?php
include "../infra/conexao.php";
$id = $_GET["id"];
$sql = "DELETE FROM prato WHERE id_prato=$id_prato";
mysqli_query($conexao,$sql);
header("Location: ../index.php");
?>  
