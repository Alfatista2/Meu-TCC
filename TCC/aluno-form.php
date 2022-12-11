<form method="post" action="aluno-salva.php">
	<input type="hidden" name="id_aluno" value="<?=$id_contato?>">
	<p>Nome: <input type="text" name="nome" size="40" value="<?=$nome?>"></p>
	<p>Matricula: <input type="text" name="matricula" size="40" value="<?=$matricula?>"></p>
	<p>Email: <input type="text" name="email" size="40" value="<?=$email?>"></p>
        <p>Senha: <input type="text" name="passe" size="40" value="<?=$passe?>"></p>
        <p>Aluno ou Validador: <input type="text" name="alunfunc" size="40" value="<?=$alunfunc?>"></p>
        <p>Turma: <input type="text" name="turma" size="40" value="<?=$turma?>"></p>
	<p><input type="submit" value="salva"></p>
</form>

