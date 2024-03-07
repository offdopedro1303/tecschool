<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', 'root');
define('DB', 'AtvEscola');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die("NÃO FOI POSSIVEL ACESSAR");