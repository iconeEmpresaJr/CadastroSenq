<?php

// Iniciando sessão
session_start();

//Setando valores das variáves email e senha
$login = $_POST['login'];
$senha = $_POST['senha'];

// Estabelecendo conexão com banco de dados
    include 'connectDB.php';
    
// $query armazena o resultado da consulta feita ao banco de dados
$query = mysql_query("SELECT * FROM Participante WHERE email = '$login' AND senha = '$senha'");

// Verifica se login e usuário são válidos, se sim, redireciona para a página home
if(mysql_num_rows($query) > 0){
    while($user = mysql_fetch_array($query)){
        $_SESSION['login'] = $user['email'];
        $_SESSION['senha'] = $user['senha'];
        $_SESSION['id'] = $user['id'];
        $_SESSION['privilegio'] = $user['privilegio'];
    }
    header('location:home.php');
}

else{
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('location:index.php');
}

mysql_close();
?>
