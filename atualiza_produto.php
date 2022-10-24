<?php
require("conexao.php");

$id_produto = $_POST['id_produto'];
$modelo = $_POST['modelo'];
$marca = $_POST['marca'];
$ano = $_POST['ano'];
$motor = $_POST['motor'];
$cor = $_POST['cor'];
$valor = $_POST['valor'];
$nome_dono = $_POST['nome_dono'];

$sql = "UPDATE tiago_produtos SET modelo = '$modelo', marca = '$marca', ano = '$ano', motor = '$motor', cor = '$cor',valor = '$valor', nome_dono = '$nome_dono'
WHERE id_produto = '$id_produto';";

if (mysqli_query($conexao, $sql)) {
    echo "Sucesso";
?>
    <br><a href="edita_produtos.php">Continuar Editando</a>
<?php
} else {
    echo "Falha";
}
