<div class="actions columns large-2 medium-3">
	<h3><?= __('Actions') ?></h3>
	<ul class="side-nav">
		<li><?= $this->Html->link(__('List Clients'), ['action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('List Commands'), ['controller' => 'Commands', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Command'), ['controller' => 'Commands', 'action' => 'add']) ?> </li>
	</ul>
</div>
<div class="clients form large-10 medium-9 columns">
	<?= $this->Form->create($client); ?>
	<fieldset>
		<legend><?= __('Add Client') ?></legend>
		<?php
			echo $this->Form->input('username');
			echo $this->Form->input('password');
			echo $this->Form->input('email');
			echo $this->Form->input('firstname');
			echo $this->Form->input('lastname');
		?>
	</fieldset>
	<?= $this->Form->button(__('Submit')) ?>
	<?= $this->Form->end() ?>
</div>
