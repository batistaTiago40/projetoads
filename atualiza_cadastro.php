<?php
require("conexao.php");

$usuario_id = $_POST['usuario_id'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "UPDATE tiago SET usuario = '$usuario', senha = md5('{$senha}')
WHERE usuario_id = '$usuario_id';";

if (mysqli_query($conexao, $sql)) { ?>

    <head>
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <figure class="text-center">
        <blockquote class="blockquote">
            <h1 class="display-3">Sucesso</h1>
        </blockquote>
        <a href="edita_cadastro.php" class="btn btn-primary">Continuar Editando</a>
    </figure>

<?php
} else {
    echo "Falha";
}
