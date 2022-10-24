<?php
require("conexao.php");
$usuario_id = $_GET["id"];

$sql_delete = "DELETE FROM tiago WHERE tiago.usuario_id = '$usuario_id'";

if (mysqli_query($conexao, $sql_delete)) {
    header("Location: edita_cadastro.php");
} else {
    echo "Erro ao excluir o arquivo";
}
