<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login - PHP + MySQL</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <style>
        .btn-color {
            background-color: #0e1c36;
            color: #fff;

        }

        .profile-image-pic {
            height: 200px;
            width: 200px;
            object-fit: cover;
        }

        .cardbody-color {
            background-color: #ebf2fa;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>
<link rel="stylesheet" href="css/bootstrap.css">

<body class="d-flex justify-content-center align-items-center vh-100 p-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card my-5">

                    <form class="card-body cardbody-color p-lg-5" action="login.php" method="POST">

                        <div class="text-center">
                            <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3" width="200px" alt="profile">
                        </div>

                        <?php
                        if (isset($_SESSION['nao_autenticado'])) :
                        ?>
                            <div class="btn btn-danger">
                                <p>ERRO: Usuário ou senha inválidos.</p>
                            </div>
                        <?php
                        endif;
                        unset($_SESSION['nao_autenticado']);
                        ?>

                        <div class="mb-3">
                            <input type="text" class="form-control" id="usuario" aria-describedby="emailHelp" placeholder="Nome de Usuário" name="usuario" autofocus="">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="senha" placeholder="Senha" name="senha">
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-outline-success btn-lg">Login</button>
                        </div>
                        <div id="emailHelp" class="form-text text-center mb-5 text-dark">Não cadastrado?
                            <a href="cadastro.php" class="text-dark fw-bold">Crie uma conta</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</body>

</html>