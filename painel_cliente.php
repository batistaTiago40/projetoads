<?php
session_start();
if ($_SESSION['usuario'] == 'admin') {
    header('Location: painel_admin.php');
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">

    <title>Painel Cliente</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="">TiagoCars</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="lista_produtos.php">Listar Produtos</a>
                </div>
                <div class="navbar-nav">
                    <a href="edita_produtos_cliente.php" class="nav-link active">Adicionar Produtos</a>
                </div>
            </div>
        </div>
        <div class="collapse navbar-collapse"><a href="logout.php" class="btn btn-danger">Sair</a></div>
    </nav>
    <main>
        <figure class="text-center">
            <blockquote class="blockquote">
                <h1 class="display-3">Sobre Nós</h1>
            </blockquote>
        </figure>
        <figure class="text-center">
            <blockquote class="blockquote-footer">
                <p>Somos uma empresa de carros voltada a venda de carros usados ou semi-novos.</p>
                <p>Visamos sempre proporcionar a melhor experiência de compra e venda para nossos clientes, buscando sempre nosso desenvolvimento como empresa para sempre atender melhor a todos.</p>
            </blockquote>
            <div class="mx-auto" style="width: 80%;">
                <img src="imgs/car1.jpg" alt="First Car" style="width: 50%; height: 450px;"><img src="imgs/car2.jpg" alt="Second Car" style="width: 50%; height: 450px;">
            </div>
            <div class="mx-auto" style="width: 80%;">
                <img src="imgs/car3.jpg" alt="Third Car" style="width: 50%; height: 470px;"><img src="imgs/car4.jpg" alt="Fourth Car" style="width: 50%; height: 470px;">
            </div>
        </figure>

    </main>
</body>

</html>