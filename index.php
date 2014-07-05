<!DOCTYPE html>
<?php 
session_start();

/* Se o usuário já estiver logado o redireciona para a pagina home */
    if(isset($_SESSION['login']) && isset($_SESSION['senha']))
    header('location:home.php');
        
?>

<html>
    <a href="cadastro.php"><button type="button" id="cadastro">Sing Up</button></a>
    <body>
        <form id="login" name="login" method="post" action="login.php">

            <table>
                <tr>
                    <td>email:</td>
                    <td><input name="login" type="text" id="emaill" />
                </tr>
                <tr>
                    <td>Senha:</td>
                    <td><input name="senha" type="password" id="senha" />
                </tr>
                <tr>
                    <td colspan="2">
                            <input name="cadastrar" type="submit" id="cadastrar" value="Submit" /> 
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
