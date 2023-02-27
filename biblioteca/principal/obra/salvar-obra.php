<?php  
	switch ($_REQUEST['acao']) {
		case 'cadastrar':
			$titulo = $_POST['titulo'];
			$autor = $_POST['autor'];
			$genero = $_POST['genero'];
			$editora = $_POST['editora'];
			$quant = $_POST['quant'];

			$sql = "INSERT INTO obra (titulo, autor, genero, editora, quant) VALUES ('{$titulo}', '{$autor}', '{$genero}', '{$editora}', '{$quant}')";

			$res = $conn->query($sql);

			if ($res==true) {
				print "<script>alert('Cadastrado');</script>";
				print "<script>location.href='?page=listar';</script>;";
			} else{
				print "<script>alert('ERROR');</script>";
				print "<script>location.href='?page=listar';</script>;";
			}
			break;

		case 'editar':
			$titulo = $_POST['titulo'];
			$autor = $_POST['autor'];
			$quant = $_POST['quant'];

			$sql = "UPDATE obra SET 
						titulo='{$titulo}',
						autor='{$autor}',
						quant='{$quant}'
					WHERE id=".$_REQUEST['id'];

			$res = $conn->query($sql);

			if ($res==true) {
				print "<script>alert('Editado');</script>";
				print "<script>location.href='?page=listar';</script>;";
			} else{
				print "<script>alert('ERROR');</script>";
				print "<script>location.href='?page=listar';</script>;";
			}
			break;

		case 'excluir':
			
			$sql = "DELETE FROM obra WHERE id=".$_REQUEST['id'];

			$res = $conn->query($sql);

			if ($res==true) {
				print "<script>alert('Deletado');</script>";
				print "<script>location.href='?page=listar';</script>;";
			} else{
				print "<script>alert('ERROR');</script>";
				print "<script>location.href='?page=listar';</script>;";
			}
			break;
	}
?>
