<fieldset>
	<h1>Nova obra</h1><br>
	<form action="?page=salvar" method="post">
		<input type="hidden" name="acao" value="cadastrar">

		<label>Título:</label><br>
		<input type="text" name="titulo" required><br>
	
		<label>Autor:</label><br>
		<input type="text" name="autor" required><br><br>

		<label>Gênero:</label>
		<select name="genero" required>
			<option value="" disabled selected>Selecione</option>
			<option value="Ficção">Ficção</option>
			<option value="Não ficção">Não ficção</option>
			<option value="Didático">Didático</option>
		</select><br><br>

		<label>Editora:</label><br>
		<input type="text" name="editora" required><br>

		<label>Quant.:</label><br>
		<input type="number" name="quant" required><br><br>
	
		<button type="submit" class="button">Enviar</button>
	</form>
</fieldset>
