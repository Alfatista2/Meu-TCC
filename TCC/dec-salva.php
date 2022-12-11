<?php

	$id_contato = $_REQUEST["id_aluno"];
	$nome = $_REQUEST["nome"];
	$matricula = $_REQUEST["matricula"];
	
 
		
		$sql = "insert into informatica(nome,matricula) values ('$nome','$matricula')";
	
	
	

	include "config.php";

	$c = mysqli_connect($host,$usuario,$senha);

	if(!$c)
	{
		echo "erro na conexão";
		echo mysqli_error($c);
		die();
	}

	if(!mysqli_select_db($c,$banco))
	{
		echo "erro no select_db";
		echo mysqli_error($c);
		mysqli_close($c);
		die();
	}


	$resp = mysqli_query($c, $sql);

	if(!$resp)
	{
		echo "erro na consulta $sql";
		echo mysqli_error($c);
		mysqli_close($c);
		die();
	}
	else
	{
		// Redirect
		header("location: salva_decaluno1.php");
	}