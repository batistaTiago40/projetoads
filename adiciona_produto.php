<?php
require('conexao.php');

if (empty($_POST['modelo']) || empty($_POST['marca']) || empty($_POST['ano']) || empty($_POST['motor']) || empty($_POST['cor']) || empty($_POST['valor']) || empty($_POST['nome_dono'])) {
    header('Location: form_adiciona_produto.php');
    exit();
}

$modelo = mysqli_real_escape_string($conexao, $_POST['modelo']);
$marca = mysqli_real_escape_string($conexao, $_POST['marca']);
$ano = mysqli_real_escape_string($conexao, $_POST['ano']);
$motor = mysqli_real_escape_string($conexao, $_POST['motor']);
$cor = mysqli_real_escape_string($conexao, $_POST['cor']);
$valor = mysqli_real_escape_string($conexao, $_POST['valor']);
$nome_dono = mysqli_real_escape_string($conexao, $_POST['nome_dono']);

$query = "INSERT INTO tiago_produtos (modelo, marca, ano, motor, cor, valor, nome_dono) VALUES ('{$modelo}', '{$marca}', '{$ano}', '{$motor}', '{$cor}','{$valor}', '{$nome_dono}')";

$result = mysqli_query($conexao, $query);

if ($result == 1) {
    header('Location: lista_produtos.php');
    exit();
} else {
    header('Location: form_adiciona_produto.php');
    exit();
}
