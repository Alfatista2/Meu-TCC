<?php

	$nome = $_REQUEST["nome_aluno"];
	
       
	include "config.php";
		
	include "3styl3.css";
       
          
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

        
        $sql = "select * from informatica where nome = '$nome' ";
	$resp = mysqli_query($c, $sql);

	if(!$resp)
	{
		echo "Email: <b>$email</b><br>";
		echo mysqli_error($c);
		mysqli_close($c);
		die();
	}
	else
	{
               $r = mysqli_fetch_assoc($resp);
               $id = $r['id_aluno'];
               $nome = $r['nome'];
               $mat = $r['matricula'];
               $turma = $r['turma'];
               $sql1 = "insert into decaluno(nome_aluno,matricula_aluno) values ('$nome','$mat')";
               $resp = mysqli_query($c, $sql1);
              

	if(!$resp)
	{
		echo "erro na consulta $sql";
		echo mysqli_error($c);
		mysqli_close($c);
		die();
	}
               $sql2 = "select * from decaluno where nome_aluno = '$nome' and matricula_aluno = '$mat'  ";
               $resp1 = mysqli_query($c, $sql2);
               $r1 = mysqli_fetch_assoc($resp1);
               $codigo=$r1['id_declar'];
	if(!$resp1)
	{
		echo "Email: <b>$email</b><br>";
		echo mysqli_error($c);
		mysqli_close($c);
		die();
	}
else{
               echo " <div style='position:absolute;top:2.00in;left:6.19in;width:9.91in;line-height:0.23in;'><span style='font-style:normal;font-weight:bold;font-size:10pt;font-family:Verdana;color:#000000'>MINISTÉRIO DA EDUCAÇÃO</span><span style='font-style:normal;font-weight:bold;font-size:11pt;font-family:Verdana;color:#000000'></span><br/></SPAN></div>"; 
               echo " <div style='position:absolute;top:2.29in;left:4.00in;width:9.41in;line-height:0.23in;'><span style='font-style:normal;font-weight:bold;font-size:13pt;font-family:Verdana;color:#000000'>CENTRO FEDERAL DE EDUCAÇÃO TECNOLÓGICA DO RIO DE JANEIRO</span><span style='font-style:normal;font-weight:bold;font-size:11pt;font-family:Verdana;color:#000000'></span><br/></SPAN></div>"; 
               echo "      <img  src='ri_1.png' width ='150' height='150' />";
               echo "<div><p>O requerente <b>$nome</b> tem matricula <b>$mat</b> e é um aluno do CEFET/RJ</p></div>"; 
               echo " <div style='position:absolute;top:7.09in;left:4.00in;width:9.41in;line-height:0.23in;'><span style='font-style:normal;font-weight:bold;font-size:13pt;font-family:Verdana;color:#000000'>CÓDIGO DA DECLARAÇÃO:</span><span style='font-style:normal;font-weight:bold;font-size:11pt;font-family:Verdana;color:#000000'></span><br/></SPAN></div>"; 
	       echo " <div style='position:absolute;top:7.09in;left:7.00in;width:9.41in;line-height:0.23in;'><span style='font-style:normal;font-weight:bold;font-size:13pt;font-family:Verdana;color:red'>$codigo</span><span style='font-style:normal;font-weight:bold;font-size:11pt;font-family:Verdana;color:#000000'></span><br/></SPAN></div>"; 
	}
 }