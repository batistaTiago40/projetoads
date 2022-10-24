<?php
require("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Tiago Cars - Edição de Cadastro</title>

    <style>
        hr {
            border-color: #aaa;
            box-sizing: border-box;
            width: 100%;
        }
    </style>
</head>

<body style="width: 100%; height: 100vh;">
    <header style="width: 100%; text-align: center;">
        <h1 class="display-1 mx-auto mt-md-3" style="width: 100%;">Cadastro de Carros</h1>
        <hr style="border-color: #aaa; box-sizing: border-box; width:100%;" />
    </header>
    <form action="adiciona_produto.php" method="post">
        <div class="form-group row">
            <div class="form-group col">
                <label for="modelo">Modelo: </label>
                <input type="text" name="modelo" id="modelo" class="form-control" placeholder="Digite o modelo:">
            </div>
            <div class="form-group col">
                <label for="marca">Marca: </label>
                <input type="text" name="marca" id="marca" class="form-control" placeholder="Digite a marca:">
            </div>
            <div class="form-group col">
                <label for="ano">Ano: </label>
                <input type="number" name="ano" id="ano" class="form-control" placeholder="Digite o ano:">
            </div>
        </div>
        <div class="form-group row">
            <div class="form-group col">
                <label for="motor">Motor: </label>
                <input type="text" name="motor" id="motor" class="form-control" placeholder="Digite o motor:">
            </div>
            <div class="form-group col">
                <label for="cor">Cor: </label>
                <input type="text" name="cor" id="cor" class="form-control" placeholder="Digite a cor:">
            </div>
            <div class="form-group col">
                <label for="valor">Valor: </label>
                <input type="number" name="valor" id="valor" class="form-control" placeholder="Digite o Valor">
            </div>
        </div>

        <div class="form-group">
            <label for="nome_dono">Nome do dono: </label>
            <input type="text" name="nome_dono" id="nome_dono" class="form-control" placeholder="Digite o nome do dono:">
        </div>

        <hr style="border-color: #aaa; box-sizing: border-box; width:100%;" />

        <div class="d-grid gap-2"><input type="submit" value="Adicionar Carro" class="btn btn-success"></div>
    </form>
</body>

</html>