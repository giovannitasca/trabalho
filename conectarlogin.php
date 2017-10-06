<?php
     session_start();

     $conexao = mysql_pconnect("localhost","root","") or die($msg[0]);
     mysql_select_db("db_trabalho",$conexao) or die($msg[1]);


      // Fazendo uma consulta SQL e retornando os resultados em uma tabela HTML
     //$query = "SELECT * FROM tbusuarios WHERE nomeuser like '{$usuario}' and senhauser like '{$senha}'";
     $resultado = mysql_query("SELECT * FROM tbusuarios WHERE nomeuser like '" . $_POST['txtusuario'] . "' and senhauser like '"
                . $_POST['txtsenha'] . "'") or die (mysql_error());

if(mysql_num_rows($resultado) == 1){

   $_SESSION['nomeuser']  = $_POST['txtusuario'];
   $_SESSION['senhauser'] = $_POST['txtsenha'];
   header ("Location: main.php");
}else{
   echo "<script>alert('Usuário ou Senha Incorretos');</script>";
   echo "<script>javascript:history.back(-2)</script>";
   die;
}

?>

</BODY>
</HTML>
