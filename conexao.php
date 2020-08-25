<?php

// Parametros para conexao
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bancoweb";

// Obtem a conexao
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica a conexao
if (!$conn) {
	die();
}

/*BASE DE DADOS*/

/*CREATE TABLE `usuario` (
 `id` int(11) NOT NULL,
 `login` varchar(32) NOT NULL,
 `senha` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1*/

?>
