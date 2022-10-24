<?php
session_start();
if ($_SESSION['usuario'] != 'admin') {
    header('Location: index.php');
}

require("conexao.php");
$sql = "SELECT * FROM tiago_produtos";

$resultado = mysqli_query($conexao, $sql);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>TiagoCars - Lista de Carros</title>

    <style>
        footer {
            position: fixed;
            bottom: 0;
            left: 0;
        }
    </style>
</head>

<body style="width: 100%; height: 100vh;">
    <header style="width: 100%; text-align: center;" class="d-grid gap-2">
        <h1 class="display-1 mx-auto" style="width: 100%;">Lista de Carros</h1>
        <td><a href="form_adiciona_produto.php" class="btn btn-success">Adicionar novo carro</a></td>
    </header>

    <table class=" table table-dark table-bordered">
        <thead>
            <tr>
                <th scope="col">Modelo</th>
                <th scope="col">Marca</th>
                <th scope="col">Ano</th>
                <th scope="col">Motor</th>
                <th scope="col">Cor</th>
                <th scope="col">Valor</th>
                <th scope="col">Nome Dono</th>
                <th scope="col">Editar</th>
                <th scope="col">Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($lista_carros = mysqli_fetch_assoc($resultado)) { ?>
                <tr>
                    <th scope="row"><?php echo $lista_carros['modelo'] ?></th>
                    <td scope="row"><?php echo $lista_carros['marca'] ?></td>
                    <td scope="row"><?php echo $lista_carros['ano'] ?></td>
                    <td scope="row"><?php echo $lista_carros['motor'] ?></td>
                    <td scope="row"><?php echo $lista_carros['cor'] ?></td>
                    <td scope="row">R$<?php echo $lista_carros['valor'] ?></td>
                    <td scope="row"><?php echo $lista_carros['nome_dono'] ?></td>
                    <td><a href="form_edita_produto.php?id_produto=<?php echo $lista_carros['id_produto'] ?>" class="btn btn-primary">Editar</a></td>
                    <td><a href="exclui_produto.php?id=<?php echo $lista_carros['id_produto'] ?>" class="btn btn-danger">Excluir</td>
                </tr>
        </tbody>
    <?php } ?>
    </table>

    <footer class="footer navbar-fixed-bottom" style="width: 100%; text-align: center;">
        <a href="painel_admin.php" class="btn btn-primary">Página de administrador</a>
    </footer>
</body>

</html>