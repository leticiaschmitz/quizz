<?php

//CONEXÃO COM A PÁGINA CONEXÃO.PHP
require_once 'conexao.php';

if(isset($_POST["login"]) && $_POST["senha"]){
    $login   = $_POST["login"];
    $senha   = $_POST["senha"];
    
	$sql = "SELECT * 
	          FROM usuario 
			 WHERE login = '" . mysqli_real_escape_string($conn, $login) . 
			      "' AND senha = '" . mysqli_real_escape_string($conn, $senha) . "'";
			 
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		//GRAVA NA SESSAO
		session_start();
		$_SESSION["logado"] = true;
		$_SESSION["login"]  = $login;
		header('location:responderquizz.php');
	} else {
		echo "Não conectado";
		die();
	}
}
else{
    echo "Você não realizou o seu login.";
	die();
}
?> 
