<html>
    <body>
        <?php
// Obtendo id via url
        $idParticipante = $_SESSION['id'];
            
        // Estabelecendo conexão com banco de dados
        include 'connectDB.php';

        // Obtendo informações do usuário
        $query = mysql_query("SELECT * FROM Participante WHERE idParticipante = '$idParticipante'");

        while($user = mysqli_fetch_array($query)) {}
            ?>

    </body>
</html>
