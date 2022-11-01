<?=$render('header')?>
<div class="container">
	<h2 class="text-center text-white mt-4 mb-4">Gerador de Escala</h2>
	<div class="row">
		<form class="mb-4" action="<?=$base?>/gerador/escala" method='POST'>
			<select name="ano" id="" class="form-select mb-3">
				<option selected>Selecione um ano</option>
				<option value="2022">2022</option>
				<option value="2023">2023</option>
			</select>

			<select name="mes" id="" class="form-select mb-3">
				<option selected>Selecione um mês</option>
				<option value="01">Janeiro</option>
				<option value="02">Fevereiro</option>
				<option value="03">Março</option>
				<option value="04">Abril</option>
				<option value="05">Maio</option>
				<option value="06">Junho</option>
				<option value="07">Julho</option>
				<option value="08">Agosto</option>
				<option value="09">Setembro</option>
				<option value="10">Outubro</option>
				<option value="11">Novembro</option>
				<option value="12">Dezembro</option>
			</select>
			<input type="submit" value="Gera Escala" class="btn btn-lg btn-primary">
		</form>
	</div>
	<div class="row justify-content-center">
		<div class="p-3 col-10 col-md-3 bg-white shadow" style="border-radius: 10px;">
			<p class="fw-bold">*Escala Mês de <?=(isset($mes)) ? "$mes" : '...';?>*</p>
			<?php if(isset($cultos)) :?>
				<?php foreach($cultos as $culto): ?>
					<?=$culto?><br>
					<p class="text-capitalize"><?=$bandas[rand(0, (count($bandas) - 1))]['name']?></p>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
</div>