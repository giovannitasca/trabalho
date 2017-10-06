<HTML>
<HEAD>
 <TITLE>Documento PHP</TITLE>
</HEAD>
<BODY>

<?
$usuario='';
$sobrenome = '';
$senha='';
$confirma='';
$email='';

$msg[0] = "Conexão com o banco falhou!";
$msg[1] = "Não foi possível selecionar o banco de dados!";

if (isset($_POST['txtusuario'])){
 $usuario = $_POST['txtusuario'];
}

if (isset($_POST['txsobrenome'])){
 $sobrenome = $_POST['txtsobrenome'];
}

if (isset($_POST['txtsenha'])){
 $senha = $_POST['txtsenha'];
}

if (isset($_POST['txtemail'])){
 $email = $_POST['txtemail'];
}

if (isset($_POST['txtconfirma'])){
 $confirma = $_POST['txtconfirma'];
}

if ($senha !== $confirma){

   echo "<script>alert('A Senha Não Esta Igual a Confirmação de Senha!');</script>";
   echo "<script>javascript:history.back(-2)</script>";
   die;
}

 $conexao = mysql_pconnect("localhost","","") or die($msg[0]);
mysql_select_db("db_trabalho",$conexao) or die($msg[1]);

$query = "Insert into tbusuarios (nomeuser, sobrenomeuser, senhauser, emailuser) Values ('{$usuario}', '{$sobrenome}' ,'{$senha}', '{$email}')";
$resultado = mysql_query($query,$conexao);

echo "<script>alert('Cadastro Realizado com Sucesso!!!');</script>";
include 'frmcadusuario.php';

?>
</BODY>
</HTML>
