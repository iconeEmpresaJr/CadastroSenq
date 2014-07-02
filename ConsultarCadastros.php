<html>
    <body>
        <?php

        // Estabelecendo conexão com banco de dados
        include 'connectDB.php';

        // Obtendo informações do usuário
        $query = mysql_query("SELECT * FROM Participante");
            ?>
        <table>
            <?php
        while($user = mysqli_fetch_array($query)) {
            ?>
                <tr>
                <td><?php echo $user['nomeCompleto']; ?></td>
                <td><a href="excluirCadastro.php?idParticipante=<?php echo $user['id'] ?>">Excluir</a><td>
                <td><a href="verCadastro.php?idParticipante=<?php echo $user['id'] ?>">Exibir</a><td>
                </tr>
            <?php
        } //encerra o loop while
        mysql_close();
        ?>
        </table>
    </body>    
</html>




