<?php

	$id_contato = $_REQUEST["id_aluno"];
	$nome = $_REQUEST["nome"];
	$matricula = $_REQUEST["matricula"];
	$email = $_REQUEST["email"];
        $passe = $_REQUEST["passe"];
        $alunfunc = $_REQUEST["status_ativ"];
        $turma = $_REQUEST["turma"];
 
	if(empty($id_contato))
	{
		// Inclusão
		$sql = "insert into informatica(nome,matricula,email,passe,status_ativ,turma) values ('$nome','$matricula','$email','$passe','$alunfunc','$turma')";
	}
	else
	{
		// Alteração
		$sql = "update informatica set nome = '$nome', matricula = '$matricula', email = '$email', passe ='$passe', status_ativ ='$alunfunc', turma = '$turma' where id_aluno = $id_contato";
	}

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
		header("location: aluno-lista-for.php");
	}


