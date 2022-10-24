<?php
session_start();
include('conexao.php');

if (empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location: cadastro.php');
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "INSERT INTO tiago (usuario, senha, status) VALUES ('{$usuario}', md5('{$senha}'), 'cliente')";

$check = "select usuario from tiago where usuario = '{$usuario}'";

$result_check = mysqli_query($conexao, $check);

$row = mysqli_num_rows($result_check);

if ($row != 0) {
    $_SESSION['nao_cadastrado'] = true;
    header('Location: cadastro.php');
    exit();
} else {
    $result = mysqli_query($conexao, $query);
    header('Location: index.php');
    exit();
}
