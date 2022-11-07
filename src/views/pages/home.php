<?=$render('header')?>

<style>
	.icon-button {
		position: fixed;
		bottom: 50px;
		right: 50px;
	}
</style>

<section>
	<div class="container">
		<h2 class='text-white text-center mt-4 mb-5'>Bandas Cadastradas</h2>
		<?php if(!empty($flash)): ?>
			<div class="row justify-content-center">
				<div class="col col-md-8">
					<div class="alert alert-success"><?=$flash?></div>
				</div>
			</div>
		<?php endif; ?>
		<!-- Tabela de bandas -->
		<div class="row justify-content-center">
			<?php foreach($bandas as $banda): ?>
				<div class="col-md-4 col-10">
					<div class="card bg-dark mb-4 text-center text-white">
						<div class="card-body">
							<h5 class="card-title text-capitalize mb-3"><?=$banda['name']?></h5>
							<div class="dropdown mb-4">
							  <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
							    Ver Ministros
							  </button>
							  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
							  	<?php foreach($ministros as $ministro): ?>
								    <li><a class="dropdown-item" href="#"><?=($ministro['banda_id'] == $banda['id']) ? $ministro['name'] : null; ?></a></li>
								<?php endforeach; ?>
							  </ul>
							</div>
							
							<div class="card-links">
								<a href="<?=$base?>/editar/banda/<?=$banda['id']?>" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></a>
						      	<a onclick="onDelete()" href="<?=$base?>/delete/banda/<?=$banda['id']?>" class="btn btn-danger ms-4">
						      		<i class="fa-solid fa-trash"></i>
						      	</a>
						      	<a href="<?=$base?>/adicionar/ministro/<?=$banda['id']?>" class="btn btn-warning text-white ms-4">
						      		<i class="fa-solid fa-plus"></i>
						      	</a>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>
	<div class="icon-button">
		<a href="<?=$base?>/adicionar/banda" class="btn btn-success btn-lg rounded-circle"><i class="fa-solid fa-plus"></i></a>
	</div>
</section>
<script>
	function onDelete() {
		if(!confirm('Tem certeza que quer deletar esta banda?')) {
			event.preventDefault();
		}
	}
</script>
</body>
</html>