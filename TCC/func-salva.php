<?php

	$id_contato = $_REQUEST["id_func"];
	$nome = $_REQUEST["nome"];
	
	$email = $_REQUEST["email"];
        $passe = $_REQUEST["passe"];
       
 
	if(empty($id_contato))
	{
		// Inclusão
		$sql = "insert into funcio(nome,email,passe) values ('$nome','$email','$passe')";
	}
	else
	{
		// Alteração
		$sql = "update informatica set nome = '$nome', email = '$email', passe ='$passe' where id_func = $id_contato";
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

