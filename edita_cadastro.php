<?php
session_start();
if ($_SESSION['usuario'] != 'admin') {
    header('Location: index.php');
}

require("conexao.php");
$sql = "SELECT * FROM tiago";

$resultado = mysqli_query($conexao, $sql);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Editor de cadastro</title>

    <style>
        footer {
            position: fixed;
            bottom: 0;
            left: 0;
        }
    </style>
</head>

<body style="width: 100%; height: 100vh;">
    <header style="width: 100%; text-align: center;">
        <h1 class="display-1 mx-auto" style="width: 100%;">Edição de Cadastros</h1>
    </header>

    <table class=" table table-dark table-bordered">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Senha</th>
                <th scope="col">Tipo</th>
                <th scope="col">Editar</th>
                <th scope="col">Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($lista_alunos = mysqli_fetch_assoc($resultado)) { ?>
                <tr>
                    <th scope="row"><?php echo $lista_alunos['usuario'] ?></th>
                    <td><?php echo $lista_alunos['senha'] ?></td>
                    <td><?php echo $lista_alunos['status'] ?></td>
                    <td><a href="form_edita_cadastro.php?id=<?php echo $lista_alunos['usuario_id'] ?>" class="btn btn-primary">Editar</a></td>
                    <td><a href="exclui_cadastro.php?id=<?php echo $lista_alunos['usuario_id'] ?>" class="btn btn-danger">Excluir</td>
                </tr>
        </tbody>
    <?php } ?>
    </table>

    <footer class="footer navbar-fixed-bottom" style="width: 100%; text-align: center;">
        <a href="painel_admin.php" class="btn btn-primary">Página de administrador</a>
    </footer>
</body>

</html>