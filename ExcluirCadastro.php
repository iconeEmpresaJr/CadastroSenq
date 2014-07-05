<html>
    <body>
        <?php

session_start();

/* Previne que a pagina seja acessada por alguém que não está logado */
        include 'checkSession.php';
        
// Redireciona caso o usuário não tenha o nível de privilégio necessário
        include 'checkPrivilege.php';

// Obtendo id via url
        $id = $_GET['id'];

// Estabelecendo conexão com banco de dados
        include 'connectDB.php';

// Selecionando todos os usuários com o id recebido
        $query = mysql_query("SELECT * FROM Participante WHERE id = $id");

while($user = mysql_fetch_array($query)){
        if($user['privilegio'] < 1) //Evita que admnistradores sejam deletados
        mysql_query("DELETE FROM Participante WHERE id = $id "); // instrução que deleta o cadastro
}


// Terminando conexão com o banco de dados
        mysql_close();

// Voltando para a pagina de gerenciamento
        header('location:ConsultarCadastros.php');
        
        ?>
    </body>
</html>
