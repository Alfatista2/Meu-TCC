<?php

	
	$nome = $_REQUEST["nome_aluno"];
	
	
         $sql1 = "select * from informatica where nome_aluno='$nome'";
	 $sql2 = "select values(matricula) from informatica where nome_aluno='$nome'";
		
	
	$matricula = $sql2;

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

        // Inclusão
	$sql = "insert into decaluno(nome_aluno,matricula_aluno) values ('$nome','$matricula')";
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
		echo "aluno de nome $nome e matricula $matricula";
	}


