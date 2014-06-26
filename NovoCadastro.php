<html>
    <body>
        <?php
        
        //Setando valores das variáveis
        
        $nomeCompleto = $_POST ["nomeCompleto"];
        $email = $_POST ["email"];
        $curso = $_POST ["curso"];
        $instituicao = $_POST ["instituicao"];
        $cpf = $_POST ["cpf"];
        $tel = $_POST ["telefone"];
        $senha = $_POST ["senha"];
        
        // Estabelecendo conexão com o banco de dados        
        include 'connectDB.php';
        
        // Inserindo dados na tabela
        $query = "INSERT INTO Participante (nomeCompleto, email, curso, instituicao, cpf, 
                                                telefone, senha)
        VALUES ('$nomeCompleto', '$email', '$curso', '$instituicao' , '$cpf', '$tel',  
					  '$senha')";
                                          
        if(mysql_query($query, $conexao))
                echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
        else
                echo "Não foi possível concluir seu cadastro.";
        
        //Encerrando conexão com o banco de dados
        mysql_close();
        ?>
    </body>
</html>