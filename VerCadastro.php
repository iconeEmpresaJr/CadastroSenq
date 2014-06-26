<html>
    <body>
        <?php
//Recebendo o id do usuário via URL
        $idParticipante = $_GET['idParticipante'];

// Estabelecendo conexão com banco de dados
        include 'connectDB.php';

// Obtendo informações do usuário
        $query = mysql_query("SELECT * FROM Participante WHERE idParticipante = '$idParticipante'");

        while($user = mysqli_fetch_array($query)) {
            ?>

            <table id="profile">
                <tr><td>Nome completo:</td><td> <?php echo $user['nomeCompleto'];?></td></tr>
                <tr><td>Curso:</td><td> <?php echo $user['curso']; ?></td></tr>
                <tr><td>Email:</td><td> <?php echo $user['email']; ?></td></tr>
                <tr><td>CPF:</td><td> <?php echo $user['cpf']; ?></td></tr>
                <tr><td>Instituicao:</td><td> <?php echo $user['instituicao']; ?></td></tr>
                <tr><td>Telefone:</td><td> <?php echo $user['telefone']; ?></td></tr>
            </table>


            <?php
        } //encerra o loop while
        mysql_close();
        ?>
    </body>    
</html>