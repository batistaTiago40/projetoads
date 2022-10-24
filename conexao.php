<?php
// Banco de dados Remoto: 

define('HOST', 'ads_manha2a.mysql.dbaas.com.br');
define('USUARIO', 'ads_manha2a');
define('SENHA', 'AdS22Manha!');
define('DB', 'ads_manha2a');

// Banco de dados local: 

// define('HOST', 'localhost');
// define('USUARIO', 'root');
// define('SENHA', '');
// define('DB', 'projetologin');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('Não foi possível conectar');
