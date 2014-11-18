<div class="actions columns large-2 medium-3">
	<h3><?= __('Actions') ?></h3>
	<ul class="side-nav">
		<li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?> </li>
	</ul>
</div>
<div class="products form large-10 medium-9 columns">
	<?= $this->Form->create($product); ?>
	<fieldset>
		<legend><?= __('Add Product') ?></legend>
		<?php
			echo $this->Form->input('name');
			echo $this->Form->input('description');
			echo $this->Form->input('type_id', ['options' => $types]);
			echo $this->Form->input('value');
		?>
	</fieldset>
	<?= $this->Form->button(__('Submit')) ?>
	<?= $this->Form->end() ?>
</div>
