<?php

	// CRUD - Create, Retrieve, Update, Delete

	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "alunos3";

	//include "config.php";

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

	

	
	
	echo "<br> <a href=\"salva_decaluno.php\">Declaraçao Aluno</a>";
        echo "<br> <a href=\"aluno-inclui.php\">Declaraçao Conlusão</a>";
        echo "<br> <a href=\"aluno-inclui.php\">Declaraçao Gratuidade</a>";
	
	mysqli_close($c);
