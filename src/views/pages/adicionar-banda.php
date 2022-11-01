<?=$render('header')?>

<div class="container">
	<h2 class="text-center text-white mt-4 mb-4">Cadastra Nova Banda</h2>
	<div class="row justify-content-center">
		<div class="col col-md-6">
			<form novalidate method="POST" action="<?=$base?>/adicionar/banda" class="needs-validation text-white">
				<div class="mb-3">
					<label for="banda" class="form-label">Nome da Banda:</label>
					<input name="banda" type="text" class="form-control" placeholder="Insira o nome da banda" required>
				</div>
				<input type="submit" value="Cadastrar" class="form-control btn btn-primary">
			</form>
		</div>
	</div>
</div>