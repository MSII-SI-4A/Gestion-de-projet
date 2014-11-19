<?php $this->assign('title', 'Produits') ?>
<?php foreach($result as $key => $row): ?>
	<div class="element">
		<h2 class="name"><?= $row->name ?></h2>
		<p class="description"><?= $row->description ?></p>
		<span class="price"><?= $row->value ?>&euro;</span>
		<input class="number" type="number" min="0" value="0"></input>
		<button class="add">Ajouter</button>
	</div>
<?php endforeach; ?>