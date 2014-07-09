<?php 
    session_start();
    include 'checkSession.php';
    include 'checkPrivilege.php';
    include 'connectDB.php';
?>
<a href="ConsultarCadastros.php"><button type="button" id="voltar">Voltar</button></a><br>
<?php    
    $query = mysql_query("SELECT * FROM Programacao ORDER BY nome");
    
    mysql_close();
            ?>
        <table>
            <tr>
                <td>id</td>
                <td>Nome</td>
                <td>Vagas</td>
            </tr>
            <?php
        while($thing = mysql_fetch_array($query)) {
            ?>
                <tr>
                <td><?php echo $thing['id']; ?></td>
                <td><a href="inscritosProgramacao.php?id=<?php echo $thing['id'] ?>">
                    <?php echo $thing['nome'] ?>
                    </a></td>
                <td><?php echo $thing['vagas'] ?></td>
                </tr>
            <?php
        } //encerra o looping while
        ?>