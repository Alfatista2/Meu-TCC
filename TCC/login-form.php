<form method="post" action="login-valida.php">
	<input type="hidden" name="id_aluno" value="<?=$id_contato?>">
	<input type="hidden" name="nome" size="40" value="<?=$nome?>">
	<input type="hidden" name="matricula" size="40" value="<?=$matricula?>">
	<p>Email: <input type="text" name="email" size="40" value="<?=$email?>"></p>
        <p>Senha: <input type="text" name="passe" size="40" value="<?=$passe?>"></p>
	<p><input type="submit" value="salva"></p>
</form>

