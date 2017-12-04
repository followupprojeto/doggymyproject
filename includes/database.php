<?php
		error_reporting(E_ALL ^  E_DEPRECATED);
		$conexao = msql_connect("localhost","root","") or die("Não foi possivel conectar no servidor")
		$database = mysql_select_db("fup_usuarios", $conexao)or die(mysql_error("Impossivel conectar na base de dados"));
?>