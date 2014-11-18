<div class="actions columns large-2 medium-3">
	<h3><?= __('Actions') ?></h3>
	<ul class="side-nav">
		<li><?= $this->Html->link(__('Edit Command'), ['action' => 'edit', $command->id]) ?> </li>
		<li><?= $this->Form->postLink(__('Delete Command'), ['action' => 'delete', $command->id], ['confirm' => __('Are you sure you want to delete # {0}?', $command->id)]) ?> </li>
		<li><?= $this->Html->link(__('List Commands'), ['action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Command'), ['action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('List Command Products'), ['controller' => 'CommandProducts', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Command Product'), ['controller' => 'CommandProducts', 'action' => 'add']) ?> </li>
	</ul>
</div>
<div class="commands view large-10 medium-9 columns">
	<h2><?= h($command->id) ?></h2>
	<div class="row">
		<div class="large-5 columns strings">
			<h6 class="subheader"><?= __('Client') ?></h6>
			<p><?= $command->has('client') ? $this->Html->link($command->client->id, ['controller' => 'Clients', 'action' => 'view', $command->client->id]) : '' ?>" ?></p>
		</div>
		<div class="large-2 columns numbers end">
			<h6 class="subheader"><?= __('Id') ?></h6>
			<p><?= $this->Number->format($command->id) ?></p>
		</div>
	</div>
</div>
<div class="related row">
	<div class="column large-12">
	<h4 class="subheader"><?= __('Related CommandProducts') ?></h4>
	<?php if (!empty($command->command_products)): ?>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th><?= __('Command Id') ?></th>
			<th><?= __('Product Id') ?></th>
			<th class="actions"><?= __('Actions') ?></th>
		</tr>
		<?php foreach ($command->command_products as $commandProducts): ?>
		<tr>
			<td><?= h($commandProducts->command_id) ?></td>
			<td><?= h($commandProducts->Product_id) ?></td>

			<td class="actions">
				<?= $this->Html->link(__('View'), ['controller' => 'CommandProducts', 'action' => 'view', $commandProducts->command_id]) ?>

				<?= $this->Html->link(__('Edit'), ['controller' => 'CommandProducts', 'action' => 'edit', $commandProducts->command_id]) ?>

				<?= $this->Form->postLink(__('Delete'), ['controller' => 'CommandProducts', 'action' => 'delete', $commandProducts->command_id], ['confirm' => __('Are you sure you want to delete # {0}?', $commandProducts->command_id)]) ?>

			</td>
		</tr>

		<?php endforeach; ?>
	</table>
	<?php endif; ?>
	</div>
</div>
