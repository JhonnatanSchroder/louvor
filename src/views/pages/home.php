<?=$render('header')?>

<section>
	<div class="container">
		<h2 class='text-white text-center mt-4'>Bandas Cadastradas</h2>
		<?php if(!empty($flash)): ?>
			<div class="row justify-content-center">
				<div class="col col-md-8">
					<div class="alert alert-success"><?=$flash?></div>
				</div>
			</div>
		<?php endif; ?>
		<!-- Tabela de bandas -->
		<div class="row justify-content-center">
			<div class="col col-md-8">
				<table class="table table-dark table-striped">
				  <thead>
				    <tr>
				      <th scope="col">Nome</th>
				      <th>Funções</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php foreach($bandas as $banda): ?>
					    <tr>
					      <th scope="row" class='text-capitalize'><?=$banda['name']?></th>
					      <td>
					      	<a href="<?=$base?>/editar/banda/<?=$banda['id']?>" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></a>
					      	<a onclick="onDelete()" href="<?=$base?>/delete/banda/<?=$banda['id']?>" class="btn btn-danger ms-4">
					      		<i class="fa-solid fa-trash"></i>
					      	</a>
					      	<a href="<?=$base?>/adicionar/ministro/<?=$banda['id']?>" class="btn btn-warning text-white ms-4">
					      		<i class="fa-solid fa-plus"></i>
					      	</a>
					      </td>
					    </tr>
				    <?php endforeach; ?>
				  </tbody>
				</table>
				<a href="<?=$base?>/adicionar/banda" class="btn btn-success btn-lg">Adicionar nova banda</a>
			</div>
		</div>
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