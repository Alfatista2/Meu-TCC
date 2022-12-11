<?php

	$id_contato = $_REQUEST["id_aluno"];

	if(!empty($id_contato))
	{
		$sql = "delete from informatica where id_aluno = $id_contato";

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


		$resp = mysqli_query($c,$sql);

		if(!$resp)
		{
			echo "erro na consulta $sql";
			echo mysqli_error($c);
			mysqli_close($c);
			die();
		}
		else
		{
			// Redirect: Volta para a página aluno-lista.php
			header("location: aluno-lista-for.php");
		}
	}	
	else
	{
		echo "ID não informado";		
	}
