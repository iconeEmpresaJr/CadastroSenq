<a href="logout.php"><button type="button" id="logout">Logout</button></a>
<a href="ConsultarCadastros.php"><button type="button" id="gerenciar">Gerenciar</button></a>
<?php
session_start();

/* Previne que a pagina seja acessada por alguém que não está logado */
include 'checkSession.php';
        
$id = $_SESSION['id'];

/* Consultando dados do usuário no banco de dados */
include 'connectDB.php';

$query = mysql_query("SELECT * FROM Participante WHERE id = $id");

while($user = mysql_fetch_array($query)){

?>
<a class="text">Bem vindo <?php echo $user['nomeCompleto'];?></a>
<br>

            <table id="profile">
                <tr><td>Nome completo:</td><td> <?php echo $user['nomeCompleto'];?></td></tr>
                <tr><td>Curso:</td><td> <?php echo $user['curso']; ?></td></tr>
                <tr><td>Email:</td><td> <?php echo $user['email']; ?></td></tr>
                <tr><td>CPF:</td><td> <?php echo $user['cpf']; ?></td></tr>
                <tr><td>Instituicao:</td><td> <?php echo $user['instituicao']; ?></td></tr>
                <tr><td>Telefone:</td><td> <?php echo $user['tel']; ?></td></tr>
            </table>


            <?php
        } //encerra o loop while
        mysql_close();
?>
