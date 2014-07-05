<?php

// Redireciona caso o usuário não tenha o nível de privilégio necessário
        if($_SESSION['privilegio']< 1)
        header('location:home.php');

?>

