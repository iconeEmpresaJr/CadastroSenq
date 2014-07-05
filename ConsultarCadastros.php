<html>
    <body>
        <a href="home.php"><button type="button" id="home">Home</button></a>
        <?php
        
        session_start();
        
       /* Previne que a pagina seja acessada por alguém que não está logado */
        include 'checkSession.php';
        
        // Redireciona caso o usuário não tenha o nível de privilégio necessário
        include 'checkPrivilege.php';
        
        // Estabelecendo conexão com banco de dados
        include 'connectDB.php';

        // Obtendo informações do usuário
        $query = mysql_query("SELECT * FROM Participante ORDER BY nomeCompleto");
            ?>
        <table>
            <?php
        while($user = mysql_fetch_array($query)) {
            ?>
                <tr>
                <td><?php echo $user['nomeCompleto']; ?></td>
                <td><a href="excluirCadastro.php?id=<?php echo $user['id'] ?>">Excluir</a><td>
                <td><a href="verCadastro.php?idParticipante=<?php echo $user['id'] ?>">Exibir</a><td>
                </tr>
            <?php
        } //encerra o loop while
        mysql_close();
        ?>
        </table>
    </body>    
</html>




