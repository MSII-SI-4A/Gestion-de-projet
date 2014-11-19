<div class="actions columns large-2 medium-3">
	<h3><?= __('Actions') ?></h3>
	<ul class="side-nav">
		<li><?= $this->Html->link(__('New Command Product'), ['action' => 'add']) ?></li>
		<li><?= $this->Html->link(__('List Commands'), ['controller' => 'Commands', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Command'), ['controller' => 'Commands', 'action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
	</ul>
</div>
<div class="commandProducts index large-10 medium-9 columns">
	<table cellpadding="0" cellspacing="0">
	<thead>
		<tr>
			<th><?= $this->Paginator->sort('command_id') ?></th>
			<th><?= $this->Paginator->sort('Product_id') ?></th>
			<th><?= $this->Paginator->sort('nb') ?></th>
			<th class="actions"><?= __('Actions') ?></th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($commandProducts as $commandProduct): ?>
		<tr>
			<td>
				<?= $commandProduct->has('command') ? $this->Html->link($commandProduct->command->id, ['controller' => 'Commands', 'action' => 'view', $commandProduct->command->id]) : '' ?>
			</td>
			<td>
				<?= $commandProduct->has('product') ? $this->Html->link($commandProduct->product->name, ['controller' => 'Products', 'action' => 'view', $commandProduct->product->id]) : '' ?>
			</td>
			<td><?= $this->Number->format($commandProduct->nb) ?></td>
			<td class="actions">
				<?= $this->Html->link(__('View'), ['action' => 'view', $commandProduct->command_id]) ?>
				<?= $this->Html->link(__('Edit'), ['action' => 'edit', $commandProduct->command_id]) ?>
				<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $commandProduct->command_id], ['confirm' => __('Are you sure you want to delete # {0}?', $commandProduct->command_id)]) ?>
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
