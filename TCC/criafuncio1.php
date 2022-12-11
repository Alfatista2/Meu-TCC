<?php

	

	$host = "localhost";
	$usuario = "root";
	$senha = "";

	
	$link = mysqli_connect($host,$usuario,$senha);
	if(!$link)
	{
		
		echo mysqli_connect_error();
		die();
	}

	$script = <<<FIM

                 

		create table alunos4.funcio (
			id_func int not null auto_increment,
			nome varchar(40),
                        email varchar(40),
                        passe varchar(40),
                      
			

			primary key(id_func)
		);
FIM;

	
	$resposta = mysqli_multi_query($link, $script);
	if($resposta)
	{
		echo "Banco criado com sucesso";
	}
	else
	{
		echo mysqli_error($link);
	}

	
	mysqli_close($link);


?>