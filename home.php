<?php 
    session_start(); 
    include 'checkSession.php';
    include 'nomeProgramacao.php';
    ?>
<a href="logout.php"><button type="button" id="logout">Logout</button></a>
<a href="ConsultarCadastros.php"><button type="button" id="gerenciar">Gerenciar</button></a><br>
<?php

$id = $_SESSION['id'];

/* Consultando dados do usuário no banco de dados */
include 'connectDB.php';

$query = mysql_query("SELECT * FROM Participante WHERE id = $id");

while($user = mysql_fetch_array($query)){

?>
<a class="text">Bem vindo <?php echo $user['nomeCompleto'];?></a>
<br><br>

            <table id="profile">
                <tr><td>Nome:</td><td> <?php echo $user['nomeCompleto'];?></td></tr>
                <tr><td>Curso:</td><td> <?php echo $user['curso']; ?></td></tr>
                <tr><td>Email:</td><td> <?php echo $user['email']; ?></td></tr>
                <tr><td>CPF:</td><td> <?php echo $user['cpf']; ?></td></tr>
                <tr><td>Instituicao:</td><td> <?php echo $user['instituicao']; ?></td></tr>
                <tr><td>Telefone:</td><td> <?php echo $user['tel']; ?></td></tr>
                <tr><td>Primeira escolha de mini-curso:</td><td> <?php echo nome($user['escolha11']); ?></td></tr>
                <tr><td>Segunda escolha de mini-curso:</td><td> <?php echo nome($user['escolha12']); ?></td></tr>
                <tr><td>Primeira escolha de oficina/visita tecnica:</td><td> <?php echo nome($user['escolha21']); ?></td></tr>
                <tr><td>Segunda escolha de oficina/visita tecnica:</td><td> <?php echo nome($user['escolha22']); ?></td></tr>
                <tr><td>Status de pagamento:</td><td> 
                    <?php if($user['pagamento']!=1)
                            echo 'Pendente';
                          else
                              echo 'Confirmado';                        
                        ?>
                    </td></tr>
            </table>


            <?php
        } //encerra o loop while
        mysql_close();
?>
