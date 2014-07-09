<?php 
    session_start();
    include 'checkSession.php';
    include 'checkPrivilege.php';
    ?>
<html>
    <body>
        <a href="home.php"><button type="button" id="home">Home</button></a>
        <a href="verPagos.php"><button type="button" id="pagos">Confirmados</button></a>
        <a href="listaProgramacao.php"><button type="button" id="programacao">Programacoes</button></a>
        <?php
        
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
                    <td><a href="VerCadastro.php?id=<?php echo $user['id'] ?>"><?php echo $user['nomeCompleto']; ?></a></td>
                <td><a href="confirmarPagamento.php?id=<?php echo $user['id'] ?>">
                    <?php if($user['pagamento'] != 1)
                        echo 'Confirmar'; ?>
                    </a></td>
                </tr>
            <?php
        } //encerra o looping while
        mysql_close();
        ?>
        </table>
    </body>    
</html>




