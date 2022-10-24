<?php
require("conexao.php");
$id_produto = $_GET["id"];

$sql_delete = "DELETE FROM tiago_produtos WHERE tiago_produtos.id_produto = '$id_produto'";

if (mysqli_query($conexao, $sql_delete)) {
    header("Location: edita_produtos.php");
} else {
    echo "Erro ao excluir o arquivo";
}
