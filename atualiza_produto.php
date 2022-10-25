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

if (mysqli_query($conexao, $sql)) { ?>

    <head>
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <figure class="text-center">
        <blockquote class="blockquote">
            <h1 class="display-3">Sucesso</h1>
        </blockquote>
        <a href="edita_produtos.php" class="btn btn-primary">Continuar Editando</a>
    </figure>

<?php
} else {
    echo "Falha";
}
