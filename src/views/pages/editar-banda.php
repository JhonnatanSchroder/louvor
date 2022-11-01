<?=$render('header')?>

<div class="container">
	<h2 class="text-center text-white mt-4 mb-4">Edite As informações da Banda</h2>
	<div class="row">
		<div class="col">
			<form method="POST" class="text-white fw-bold" action="<?=$base?>/editar/banda/<?=$id?>">
				<div class="mb-3">
					<label for="banda" class="form-label">Nome da Banda:</label>
					<input type="text" class="form-control text-capitalize" value="<?=$banda->name?>">
				</div>

				<label for="banda" class="form-label">Ministros:</label>
				<?php if(isset($ministros)): ?>
					<?php foreach($ministros as $ministro): ?>
						<div class="input-group mb-3">
						  <input type="text" class="form-control" name="name" value="<?=$ministro['name']?>">							
						  <span class="input-group-text" id="basic-addon3">-</span>
						  <input type="text" class="form-control" name="funcao" value="<?=$ministro['funcao']?>">
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
				<input type="submit" value="Salvar" class="btn btn-primary btn-lg me-5">
				<a href="<?=$base?>/adicionar/ministro/<?=$banda->id?>" class="text-white btn btn-warning btn-lg">Adicionar Ministro</a>
			</form>
		</div>
	</div>
</div>