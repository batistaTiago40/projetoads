<?php
session_start();
// Inclue o arquivo de conexão
include('conexao.php');

// Verifica se o usuário digitou algo nos campos de login
if (empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location: index.php');
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

// Faz o select na tabela do BD
$query = "SELECT usuario_id, usuario FROM tiago WHERE usuario = '{$usuario}' AND senha = md5('{$senha}');";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {
    $_SESSION['usuario'] = $usuario;
    header('Location: painel_cliente.php');
    exit();
} else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: index.php');
    exit();
}
