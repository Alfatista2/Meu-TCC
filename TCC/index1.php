<html>
  
  <head>
    
  <link rel="stylesheet" href="style1.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema de Emissões de Declaração</title>
  
  </head>
  
  <body> <!-- se lembre que isso aqui é comentário !-->
    
    <div id="azul">
       <div id="login">
        
        <form class="card" method="post" action="login-valida.php">
        
          <div class="card-header">
            <h2>login</h2>
          </div>
        
          <div class="card-content">
            
            <div class="card-content-area">
              <label for="usuario">Email</label>
              <input type="text" name="email" size="40" value="<?=$email?>">
            </div>
            
            <div class="card-content-area">
              <label for="password"> Senha </label>
              <input type="text" name="passe" size="40" value="<?=$passe?>">
            </div>
            
            <div class="card-footer">
              <input type="submit" value="login" class="submit">  
            </div>
            
          </div>
          
        </form>
      </div>
    </div>
    
    <div id="branco">
    </div>
    
  </body>
  
</html>