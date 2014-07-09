<?php 
    session_start();
    include 'checkSession.php';
    include 'checkPrivilege.php';
    include 'connectDB.php';
?>
<a href="ConsultarCadastros.php"><button type="button" id="home">Voltar</button></a><br>
<?php   
    $query = mysql_query("SELECT * FROM Participante WHERE pagamento='1' ORDER BY nomeCompleto");
    
    while($user = mysql_fetch_array($query)){
        ?>
<a href="VerCadastro.php?id=<?php echo $user['id'] ?>"><?php echo $user['nomeCompleto']; ?></a><br>
    <?php
    }
    mysql_close();
?>