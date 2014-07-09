<?php

    // Função que retira a vaga da programação com o dado ID, retorna 0 ou 1
    function reserva($id){
        $query = mysql_query("SELECT * FROM Programacao WHERE id = $id");
        
        while($thing = mysql_fetch_array($query)){
            if($thing['vagas']>0){
                $vagas = $thing['vagas'] - 1;
                mysql_query("UPDATE Programacao SET vagas = '$vagas' WHERE id = $id");
                return 1;
            }
            else
                return 0;
        }
    }

?>