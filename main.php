<?php
  include 'restrito.php';
?>
<HTML>
<HEAD>
 <TITLE>Documento PHP</TITLE>
</HEAD>

<BODY>

  <?php

       echo 'Voce esta logado como '. $_SESSION['nomeuser'] .' <a href = "?logout=sim">Sair</a>';
       
       if ($_GET["logout"]){
          session_destroy();
       }

  ?>
  
  <a href = "usuarioscadastrados.php">Usuarios Cadastrados</a>

</BODY>
</HTML>
