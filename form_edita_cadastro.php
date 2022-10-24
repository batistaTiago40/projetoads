<?php
session_start();
if ($_SESSION['usuario'] != 'admin') {
    header('Location: index.php');
}
require("conexao.php");

$usuario_id = $_GET["id"];

$consulta_por_id = "SELECT * FROM tiago WHERE usuario_id = '$usuario_id';";

$resultado = mysqli_query($conexao, $consulta_por_id);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>TCars - Edição de Cadastro</title>
</head>

<body>
    <?php while ($atualiza_aluno = mysqli_fetch_assoc($resultado)) { ?>
        <form action="atualiza_cadastro.php" method="post">
            <input type="hidden" name="usuario_id" value="<?php echo $usuario_id; ?>">

            <div class="form-group row">
                <div class="form-group col">
                    <label for="usuario">Nome de usuário: </label>
                    <input type="text" name="usuario" id="usuario" class="form-control" value="<?php echo $atualiza_aluno['usuario']; ?>"><br><br>
                </div>
                <div class="form-group col">
                    <label for="senha">Senha: </label>
                    <input type="password" name="senha" id="senha" class="form-control" value=""><br><br>
                </div>
            </div>

            <div class="d-grid gap-2"><input type="submit" value="Atualizar Cadastro do Cliente" class="btn btn-success mt-md-5"></div>
        </form>
    <?php } ?>
</body>

</html>