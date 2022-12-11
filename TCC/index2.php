<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="style6.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
 <div class="fundo">  

    <div class="container">
          
        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-primary">DERAC</h2>
                <p class="description description-primary">Declarações</p>
                
                
            </div>    
            <div class="second-column">
                <form class="form" method="post" action="login-valida.php">
                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="text" name="email" size="40" value="<?=$email?>">
                    </label>
                    
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                          <input type="text" name="passe" size="40" value="<?=$passe?>">
                    </label>
                    
                    
                    <button class="btn btn-second" type="submit">LOGIN</button>        
                </form>
            </div><!-- second column -->
        </div><!-- first content -->
        
    </div>
    <script src="js/app.js"></script>
</body>
</html>