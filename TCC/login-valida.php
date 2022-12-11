<?php

	$email = $_REQUEST["email"];
        $passe = $_REQUEST["passe"];
	
       
	include "config.php";
		
	include "2styl2.css";
       
          
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

        
        $sql = "select * from informatica where email = '$email' and passe ='$passe'";
	$resp = mysqli_query($c, $sql);
        
    
	
   if(!is_null($resp)){
               $r = mysqli_fetch_assoc($resp);
               $id = $r['id_aluno'];
               $nome = $r['nome'];
               $mat = $r['matricula'];
               $turma = $r['turma'];
               $turno = $r['turno'];
               $status = $r['status'];
               $ativ = $r['status_ativ'];
               $status1 = "fim";
               $status2 = "mat";
               $turno1 = "tarde";
               $turno2 = "manha";
               
               if($ativ==1){
                 echo "<br><br><br><br><br><br><br><br><br><br><br><a href=\"salva_decaluno1.php?nome_aluno=$nome\"><img src='pdf_vermelho1.png' width ='200' height='130' /></a>";
                 if(strcasecmp($status,$status1)==0 ){
                 echo " <a href=\"salva_decconc.php?nome_aluno=$nome\"><img src='pdf_vermelho1.png' width ='200' height='130' /></a>";}else{echo "<img src='pdf_cinza2.png' width ='200' height='130' />";}
                 if( strcasecmp($status,$status2)==0 && strcasecmp($turno,$turno1)==0  ||  strcasecmp($turno,$turno2)==0 ){
                 echo " <a href=\"salva_decgrat.php?nome_aluno=$nome\"><img src='pdf_vermelho1.png' width ='200' height='130' /></a>";}else{echo "<img src='pdf_cinza2.png' width ='200' height='130' /><br><br><br>";}
                 }
               else{
            $codigo= "";
            
            echo "<div class='fundo'>";
            echo "<div class='container'>";
            echo "<div class='content first-content'>";
            echo "<div class='first-column'>";
            echo "<h2 class='title title-primary'>VALIDAR</h2>";
            echo "<p class='description description-primary'>Declarações</p>  ";
            echo "</div>"; 
            echo "<div class='second-column'>";

            echo "<br><br><br><br><br><br><br><br><br><br><br><br>";
            echo "<form class='form' method='post' action='decalun-valida.php'>";
            echo "<label class='label-input' for=''>";
            echo "<input type='text' name='codigo' placeholder='ALUNO' size='40' value='$codigo'>";
            echo "<button class='btn btn-second' type='submit'>VALIDAR</button>";
            echo "</label>";
            echo "</form>";
             
            echo "<form class='form' method='post' action='decgrat-valida.php'>";
            echo "<label class='label-input' for=''>";
            echo "<input type='text' name='codigo' placeholder='GRATUIDADE' size='40' value='$codigo'>";
            echo "<button class='btn btn-second' type='submit'>VALIDAR</button>";
            echo "</label>";
            echo "</form>";
 
                
            echo "<form class='form' method='post' action='decconc-valida.php'>";
            echo "<label class='label-input' for=''>";
            echo "<input type='text' name='codigo' placeholder='CONCLUSÃO' size='40' value='$codigo'>";
            echo "<button class='btn btn-second' type='submit'>VALIDAR</button>";
            echo "</label>";
 

              
            echo "</form>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
                 }
               }
                else{
                
               echo "merda";
               die();
                      
               }
	    
 
        

    
