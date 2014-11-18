<div class="actions columns large-2 medium-3">
	<h3><?= __('Actions') ?></h3>
	<ul class="side-nav">
		<li><?= $this->Form->postLink(
				__('Delete'),
				['action' => 'delete', $command->id],
				['confirm' => __('Are you sure you want to delete # {0}?', $command->id)]
			)
		?></li>
		<li><?= $this->Html->link(__('List Commands'), ['action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('List Command Products'), ['controller' => 'CommandProducts', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Command Product'), ['controller' => 'CommandProducts', 'action' => 'add']) ?> </li>
	</ul>
</div>
<div class="commands form large-10 medium-9 columns">
	<?= $this->Form->create($command); ?>
	<fieldset>
		<legend><?= __('Edit Command') ?></legend>
		<?php
			echo $this->Form->input('client_id', ['options' => $clients]);
		?>
	</fieldset>
	<?= $this->Form->button(__('Submit')) ?>
	<?= $this->Form->end() ?>
</div>
