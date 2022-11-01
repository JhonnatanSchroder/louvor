<?=$render('header')?>

<div class="container">
	<h2 class="text-center text-white mt-4 mb-4">Cadastra Novo Ministro</h2>
	<?php if(!empty($flash)): ?>
		<div class="row justify-content-center">
			<div class="col col-md-8">
				<div class="alert alert-success"><?=$flash?></div>
			</div>
		</div>
	<?php endif; ?>
	<div class="row justify-content-center">
		<div class="col col-md-6">
			<form novalidate method="POST" action="<?=$base?>/adicionar/ministro/<?=$id?>" class="needs-validation text-white">
				<div class="mb-3">
					<label for="banda" class="form-label">Nome do Ministro:</label>
					<input name="name" type="text" class="form-control" placeholder="Insira o nome do ministro" required>
				</div>

				<div class="mb-3">
					<label for="banda" class="form-label">Função do Ministro (Vocal, Violão, Vateria etc...):</label>
					<input name="funcao" type="text" class="form-control" placeholder="Insira a função do ministro" required>
				</div>
				<input type="submit" value="Cadastrar" class="form-control btn btn-primary">
			</form>
		</div>
	</div>
</div>