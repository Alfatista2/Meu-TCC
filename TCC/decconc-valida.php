<?php

	$codigo = $_REQUEST["codigo"];
        
	
       
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

        
        $sql = "select * from decconc where id_declar = '$codigo'";
	$resp = mysqli_query($c, $sql);
        
    
	
   if(is_null($resp)){

		echo " <div style='position:absolute;top:7.09in;left:7.00in;width:9.41in;line-height:0.23in;'><span style='font-style:normal;font-weight:bold;font-size:13pt;font-family:Verdana;color:red'>DECLARAÇÃO INEXISTENTE</span><span style='font-style:normal;font-weight:bold;font-size:11pt;font-family:Verdana;color:#000000'></span><br/></SPAN></div>"; 
		
		die();
	}
 else{
         $r = mysqli_fetch_assoc($resp);
         $mat = $r['matricula_aluno'];
         
         $sql = "select * from informatica where matricula = '$mat'";
         $resp1 = mysqli_query($c, $sql);    
         $r1 = mysqli_fetch_assoc($resp1);
               
               $id = $r1['id_aluno'];
               $nome = $r1['nome'];
               $mat = $r1['matricula'];
               $turma = $r1['turma'];
               $turno = $r1['turno'];
               $status = $r1['status'];
               $ativ = $r1['status_ativ'];
               
               
               
                 echo " <div style='position:absolute;top:2.00in;left:6.19in;width:9.91in;line-height:0.23in;'><span style='font-style:normal;font-weight:bold;font-size:10pt;font-family:Verdana;color:#000000'>MINISTÉRIO DA EDUCAÇÃO</span><span style='font-style:normal;font-weight:bold;font-size:11pt;font-family:Verdana;color:#000000'></span><br/></SPAN></div>"; 
               echo " <div style='position:absolute;top:2.29in;left:4.00in;width:9.41in;line-height:0.23in;'><span style='font-style:normal;font-weight:bold;font-size:13pt;font-family:Verdana;color:#000000'>CENTRO FEDERAL DE EDUCAÇÃO TECNOLÓGICA DO RIO DE JANEIRO</span><span style='font-style:normal;font-weight:bold;font-size:11pt;font-family:Verdana;color:#000000'></span><br/></SPAN></div>"; 
               echo "      <img  src='ri_1.png' width ='150' height='150' />";
               echo "<div><p>O requerente <b>$nome</b> tem matricula <b>$mat</b> e concluiu o ensino médio e técnico.</p></div>"; 
               echo " <div style='position:absolute;top:7.09in;left:4.00in;width:9.41in;line-height:0.23in;'><span style='font-style:normal;font-weight:bold;font-size:13pt;font-family:Verdana;color:#000000'>CÓDIGO DA DECLARAÇÃO:</span><span style='font-style:normal;font-weight:bold;font-size:11pt;font-family:Verdana;color:#000000'></span><br/></SPAN></div>"; 
	       echo " <div style='position:absolute;top:7.09in;left:7.00in;width:9.41in;line-height:0.23in;'><span style='font-style:normal;font-weight:bold;font-size:13pt;font-family:Verdana;color:red'>$codigo</span><span style='font-style:normal;font-weight:bold;font-size:11pt;font-family:Verdana;color:#000000'></span><br/></SPAN></div>"; 
                 
                }