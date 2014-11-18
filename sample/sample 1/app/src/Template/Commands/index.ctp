<div class="actions columns large-2 medium-3">
	<h3><?= __('Actions') ?></h3>
	<ul class="side-nav">
		<li><?= $this->Html->link(__('New Command'), ['action' => 'add']) ?></li>
		<li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('List Command Products'), ['controller' => 'CommandProducts', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Command Product'), ['controller' => 'CommandProducts', 'action' => 'add']) ?> </li>
	</ul>
</div>
<div class="commands index large-10 medium-9 columns">
	<table cellpadding="0" cellspacing="0">
	<thead>
		<tr>
			<th><?= $this->Paginator->sort('id') ?></th>
			<th><?= $this->Paginator->sort('client_id') ?></th>
			<th class="actions"><?= __('Actions') ?></th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($commands as $command): ?>
		<tr>
			<td><?= $this->Number->format($command->id) ?></td>
			<td>
				<?= $command->has('client') ? $this->Html->link($command->client->id, ['controller' => 'Clients', 'action' => 'view', $command->client->id]) : '' ?>
			</td>
			<td class="actions">
				<?= $this->Html->link(__('View'), ['action' => 'view', $command->id]) ?>
				<?= $this->Html->link(__('Edit'), ['action' => 'edit', $command->id]) ?>
				<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $command->id], ['confirm' => __('Are you sure you want to delete # {0}?', $command->id)]) ?>
			</td>
		</tr>

	<?php endforeach; ?>
	</tbody>
	</table>
	<div class="paginator">
		<ul class="pagination">
			<?= $this->Paginator->prev('< ' . __('previous')); ?>
			<?= $this->Paginator->numbers(); ?>
			<?=	$this->Paginator->next(__('next') . ' >'); ?>
		</ul>
		<p><?= $this->Paginator->counter(); ?></p>
	</div>
</div>
