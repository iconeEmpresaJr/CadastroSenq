<!DOCTYPE html>
<html>

<body>
    <form id="cadastro" name="cadastro" method="post" action="NovoCadastro.php">
        <table>
            <tr>
                <td>Nome:</td>
                <td><input name="nome" type="text" id="nome"/></td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td><input name="email" type="text" id="email"/></td>
            </tr>
            <tr>
                <td>Senha:</td>
                <td><input name="senha" type="password" id="senha"/></td>
            </tr>
            <tr>
                <td>CPF:</td>
                <td><input name="cpf" type="text" id="cpf"/></td>
            </tr>
            <tr>
                <td>Telefone:</td>
                <td><input name="telefone" type="text" id="telefone"/></td>
            </tr>
            <tr>
                <td>Institui&ccedil;&atilde;o:</td>
                <td><input name="instituicao" type="text" id="instituicao" /></td>
            </tr>
            <tr>
                <td>Curso:</td>
                <td><input name="curso" type="text" id="curso" /></td>
            </tr>
            <tr>
                <td>Programação</td>
                <td><select name="P1-1" id="P1-1">
                        <option value="">Selecione...</option>
                <?php 
                    // Codigo php que exibe as opções interativamente
                  include 'connectDB.php';
                  
                  $query = mysql_query("SELECT * FROM Programacao WHERE tipo = '1' ORDER BY nome");
                  
                  mysql_close();
                  
                  while($option = mysql_fetch_array($query)) {
                      if($option['vagas'] > 0){
                  ?>  
                        <option value="<?php echo $option['id']; ?>"><?php echo $option['nome'] ?></option>
                  <?php }} ?>
                    </select>
            </tr>
            <tr>
                <td></td>
                <td><select name="P2-1" id="P2-1">
                        <option value="">Selecione...</option>
                <?php 
                    // Codigo php que exibe as opções interativamente
                  include 'connectDB.php';
                  
                  $query = mysql_query("SELECT * FROM Programacao WHERE tipo = '2' ORDER BY nome");
                  
                  mysql_close();
                  
                  while($option = mysql_fetch_array($query)) {
                      if($option['vagas'] > 0){
                  ?>  
                        <option value="<?php echo $option['id']; ?>"><?php echo $option['nome'] ?></option>
                  <?php }} ?>
                    </select>
            </tr>
            <tr>
                <td>Segunda Opção</td>
                <td><select name="P1-2" id="P1-2">
                        <option value="">Selecione...</option>
                <?php 
                    // Codigo php que exibe as opções interativamente
                  include 'connectDB.php';
                  
                  $query = mysql_query("SELECT * FROM Programacao WHERE tipo = '1' ORDER BY nome");
                  
                  mysql_close();
                  
                  while($option = mysql_fetch_array($query)) {
                      if($option['vagas'] > 0){
                  ?>  
                        <option value="<?php echo $option['id']; ?>"><?php echo $option['nome'] ?></option>
                  <?php }} ?>
                    </select>
            </tr>
            <tr>
                <td></td>
                <td><select name="P2-2" id="P2-2">
                        <option value="">Selecione...</option>
                <?php 
                    // Codigo php que exibe as opções interativamente
                  include 'connectDB.php';
                  
                  $query = mysql_query("SELECT * FROM Programacao WHERE tipo = '2' ORDER BY nome");
                  
                  mysql_close();
                  
                  while($option = mysql_fetch_array($query)) {
                      if($option['vagas'] > 0){
                  ?>  
                        <option value="<?php echo $option['id']; ?>"><?php echo $option['nome'] ?></option>
                  <?php }} ?>
                    </select>
            </tr>
            <tr>
                <td>
                        <input name="cadastrar" type="submit" id="cadastrar" value="Concluir meu Cadastro!" /> 
                        <br />
                        <input name="limpar" type="reset" id="limpar" value="Limpar Campos preenchidos!" />
                        <br />
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
