<div class="actions columns large-2 medium-3">
	<h3><?= __('Actions') ?></h3>
	<ul class="side-nav">
		<li><?= $this->Form->postLink(
				__('Delete'),
				['action' => 'delete', $commandProduct->command_id],
				['confirm' => __('Are you sure you want to delete # {0}?', $commandProduct->command_id)]
			)
		?></li>
		<li><?= $this->Html->link(__('List Command Products'), ['action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('List Commands'), ['controller' => 'Commands', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Command'), ['controller' => 'Commands', 'action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
	</ul>
</div>
<div class="commandProducts form large-10 medium-9 columns">
	<?= $this->Form->create($commandProduct); ?>
	<fieldset>
		<legend><?= __('Edit Command Product') ?></legend>
		<?php
			echo $this->Form->input('nb');
		?>
	</fieldset>
	<?= $this->Form->button(__('Submit')) ?>
	<?= $this->Form->end() ?>
</div>
