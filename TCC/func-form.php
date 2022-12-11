<form method="post" action="func-salva.php">
	<input type="hidden" name="id_func" value="<?=$id_contato?>">
	<p>Nome: <input type="text" name="nome" size="40" value="<?=$nome?>"></p>
	
	<p>Email: <input type="text" name="email" size="40" value="<?=$email?>"></p>
        <p>Senha: <input type="text" name="passe" size="40" value="<?=$passe?>"></p>
       
	<p><input type="submit" value="salva"></p>
</form>