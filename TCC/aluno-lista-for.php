<?php

	// CRUD - Create, Retrieve, Update, Delete

	

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

	$sql = "select * from informatica";

	$resp = mysqli_query($c, $sql);

	if(!$resp)
	{
		echo "erro na consulta $sql";
		echo mysqli_error($c);
		mysqli_close($c);
		die();
	}
	$nregistros = mysqli_num_rows($resp);
	echo "Quantidade de registros encontrados: $nregistros ";
	
	if($nregistros != 0)
	{
		for($cont = 0; $cont < $nregistros; $cont++)
		{
            $linha = mysqli_fetch_assoc($resp);
			$id_contato = $linha["id_aluno"];
			$nome = $linha["nome"];
			$matricula = $linha["matricula"];
			$email = $linha["email"];
                        $passe = $linha["passe"]; 
                        $turma = $linha["turma"]; 
                        $alunfunc=$linha["status_ativ"]; 
			echo "<div style=\"padding:10px;margin:5px;border:2px blue dashed;\">";
			echo "Id aluno: <b>$id_contato</b><br>";
			echo "Nome: <b>$nome</b><br>";
			echo "Matricula: <b>$matricula</b><br>";
			echo "Email: <b>$email</b><br>";
                        echo "Senha: <b>$passe</b><br>";
                        echo "Turma: <b>$turma</b><br>"; 
			echo "<a href=\"aluno-atualiza.php?id_aluno=$id_contato\">Edita</a>";
			echo " | ";
			echo "<a href=\"aluno-delete.php?id_aluno=$id_contato\">Deleta</a>";
			echo "</div>";
		}
	}
	else
	{
		echo "tabela vazia";
	}
      
	echo "<br> <a href=\"aluno-inclui.php\">Inclui</a>";
       

mysqli_free_result($resp);






$sql1 = "select * from funcio";

	$resp1 = mysqli_query($c, $sql1);

	if(!$resp1)
	{
		echo "erro na consulta $sql1";
		echo mysqli_error($c);
		mysqli_close($c);
		die();
	}
	$nregistros = mysqli_num_rows($resp1);
	echo "Quantidade de registros encontrados: $nregistros ";
	
	if($nregistros != 0)
	{
		for($cont = 0; $cont < $nregistros; $cont++)
		{
            $linha = mysqli_fetch_assoc($resp1);
			$id_contato = $linha["id_func"];
			
			$email = $linha["email"];
                        $passe = $linha["passe"]; 
                        
			echo "<div style=\"padding:10px;margin:5px;border:2px blue dashed;\">";
			echo "Id aluno: <b>$id_contato</b><br>";
			
			
			echo "Email: <b>$email</b><br>";
                        echo "Senha: <b>$passe</b><br>";
                        
			echo "<a href=\"aluno-atualiza.php?id_aluno=$id_contato\">Edita</a>";
			echo " | ";
			echo "<a href=\"aluno-delete.php?id_aluno=$id_contato\">Deleta</a>";
			echo "</div>";
		}
	}
	else
	{
		echo "tabela vazia";
	}
        echo "<br> <a href=\"func-inclui.php\">Inclui func</a>";
        echo "<br> <a href=\"login-1.php\">Login</a>";
	mysqli_free_result($resp1);
	mysqli_close($c);


