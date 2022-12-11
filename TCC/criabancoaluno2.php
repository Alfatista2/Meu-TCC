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

                 

		update table alunos3.informatica (
			id_aluno int not null auto_increment,
			nome varchar(40),
			matricula varchar(40),
                        email varchar(40),
                        passe varchar(40),
                        curso varchar(40),
                        turno varchar(40),
                        status varchar(40),
                        status_ativ varchar(40),
                        turma varchar(40),
			

			primary key(id_aluno)
		);

		

                update table alunos3.decaluno (
			id_declar int not null auto_increment,
			nome_aluno varchar(40),
			matricula_aluno varchar(40),
                        
                       
			

			primary key(id_declar)
		);
               
               update table alunos3.decconc (
			id_declar int not null auto_increment,
			nome_aluno varchar(40),
			matricula_aluno varchar(40),
                        turma varchar(40),
                        status varchar(40),
                       
			

			primary key(id_declar)
		);
              
              update table alunos3.decgrat (
			id_declar int not null auto_increment,
			nome_aluno varchar(40),
			matricula_aluno varchar(40),
                        turno varchar(40),
                        status_ativ varchar(40),
                       
			

			primary key(id_declar)
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
