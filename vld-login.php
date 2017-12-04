<html>
  
<head>
 <title>Autenticando usuário</title>
   <script type="text/javascript">
		function loginsuccessfully() {
		   setTimeout ("window.location='termos.php'", 3000);
		}

		function loginfailed(){
			 setTimeou ("window.location='login.php'", 3000);
			}
   </script>
</head>
   
<body>
<?php
		$conn = @mysql_connect('localhost','root','');
			if (!$conn) {
				die('Não foi possível Conectar: ' . mysql_error());
		}
		mysql_select_db('fup_usuarios', $conn);
?>
<?php
$email=$_POST['email'];
$senha=$_POST['senha'];
$sql = mysql_query ("SELECT * FROM  usuarios WHERE email = '$email' AND senha = '$senha'") or die (mysql_error());
$row = mysql_num_rows ($sql);
if($row > 0) {
 $_SESSION ['email']= $_POST ['email'];
 $_SESSION ['senha']=  $_POST ['senha'];
 echo "<script>loginsuccessfully()</script>";
 echo "Você foi autenticado com sucesso! Aguade um instante.";
} else {
 echo "Nome de usuário ou senha inválido! aguarde um instante.";
 echo "<script>loginfailed()</script>";  
}
?>

   </body>
</html>﻿
