<?php 
session_start();
/* Se o usuário já estiver logado o redireciona para a pagina home */
    if(isset($_SESSION['login']) && isset($_SESSION['senha']))
    header('location:home.php');
        
?>
<!DOCTYPE HTML> 
<html>
    <a href="Cadastro.php"><button type="button" id="cadastro">Inscrever-se</button></a>
    <body>
        <form id="login" name="login" method="post" action="login.php">

            <table>
                <tr>
                    <td>E-mail:</td>
                    <td><input name="login" type="text" id="emaill" />
                </tr>
                <tr>
                    <td>Senha:</td>
                    <td><input name="senha" type="password" id="senha" />
                </tr>
                <tr>
                    <td colspan="2">
                            <input name="cadastrar" type="submit" id="cadastrar" value="Entrar" /> 
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
