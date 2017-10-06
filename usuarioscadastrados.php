<?php

    $msg[0] = "Conexão com o banco falhou!";
    $msg[1] = "Não foi possível selecionar o banco de dados!";

    $conexao = mysql_pconnect("localhost","","") or die($msg[0]);
    mysql_select_db("db_trabalho",$conexao) or die($msg[1]);

    include 'a.php';

    ?>

    <BR>
    <table border = "1">
     <!-- <caption><u><h1 align = "center">Clientes Cadastrados</u></h1></caption> !-->
     <tr>
          <th>ID</font></th>
          <th>Nome</font></th>
          <th>Sobrenome</font></th>
          <th>Email</font></th>
     </tr>

    <?php
      /**
       *@comentario fazendo uma consulta no banco de dados buscando todos os clientes cadastrados
       */
    $query = "Select * from tbusuarios order by iduser asc";
    $resultado = mysql_query($query, $conexao);

    $var = 0;
    while ($linha = mysql_fetch_array($resultado)){

      if ($var == 0){
         $cor = 'white';
         $var = 1;
         }else{
         $cor = 'silver';
         $var = 0;
         }

    ?>
      <tr bgcolor=<? echo $cor; ?>>
            <th><?php echo $linha['iduser'];        ?></th>
            <td><?php echo $linha['nomeuser'];      ?></td>
            <td><?php echo $linha['sobrenomeuser']; ?></td>
            <td><?php echo $linha['emailuser'];     ?></td>
      </tr>

    <?php
    }
    ?>
    </table>

    <form action = "frmcadusuario.php" method = "POST">
          <input type = "submit" value = "Voltar ao Cadastro">
    </form>


