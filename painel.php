<?php
session_start();
include('verifica_login.php');
include('conexao.php');
$clAdm = "SELECT usuario_id, usuario FROM tiago WHERE usuario = '{$_SESSION['usuario']}' AND status = 'admin'";
$result = mysqli_query($conexao, $clAdm);
$row = mysqli_num_rows($result);

if ($row == 1) {
    $_SESSION['admin'] = 'admin';
    header("Location: painel_admin.php?$_SESSION'admin'");
} else {
    $_SESSION['cliente'] = 'cliente';
    header("Location: painel_cliente.php?$_SESSION'cliente'");
}
