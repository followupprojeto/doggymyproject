<html>
<head>
</head>
<body>
<?php
$conexao = @mysql_connect ('localhost', 'root', '') or die(mysql_error());
	mysql_select_db ("fup_usuarios") or die(mysql_error());
	
$nome=$_POST['nome'];
$ultimonome=$_POST['ultimonome'];
$email=$_POST['email'];
$celular=$_POST['celular'];
$aniversario=date('y-m-d', strtotime($_POST['aniversario']));
$sexo=$_POST['sex'];
$senha= md5($_POST['senha']);
$confsenha= md5($_POST['confirmasenha']);

$query = mysql_query(utf8_decode("INSERT INTO usuarios (nome, ultimonome, email, celular, aniversario, sex, senha, confirmasenha)
VALUES('$nome' , '$ultimonome', '$email', '$celular' , '$aniversario', '$sexo', '$senha' , '$confirmasenha')"));

	if($query){
		echo 'Cadastrado com sucesso';
	}else{
		echo 'Houve algum problema no seu cadastro, por favor tente novamente mais tarde!';
	}
?>
</body>
</html>