<html>
    <body>
        <?php
        
        //Setando valores das variÃ¡veis
        
        $nome = $_POST ["nome"];
        $email = $_POST ["email"];
        $curso = $_POST ["curso"];
        $instituicao = $_POST ["instituicao"];
        $cpf = $_POST ["cpf"];
        $tel = $_POST ["telefone"];
        $senha = $_POST ["senha"];
        $p11 = $_POST ['P1-1'];
        $p12 = $_POST ['P1-2'];
        $p21 = $_POST ['P2-1'];
        $p22 = $_POST ['P2-2'];
        
        // Estabelecendo conexÃ£o com o banco de dados        
        include 'connectDB.php';
        
        // Inserindo dados na tabela
        $query = "INSERT INTO Participante(nomeCompleto,email,curso,senha,instituicao,cpf,tel,p1-1,p1-2,p2-1,p2-2) 

	VALUES('$nome','$email','$curso', '$senha','$instituicao','$cpf','$tel','$p11','$p12','$p21','$p22')";
                                          
        if(mysql_query($query, $conexao))
                echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenÃ§Ã£o.";
        else
                echo "NÃ£o foi possÃ­vel concluir seu cadastro.";
        
        //Encerrando conexÃ£o com o banco de dados
        mysql_close();
        ?>
    </body>
</html>