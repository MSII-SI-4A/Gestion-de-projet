<div class="actions columns large-2 medium-3">
	<h3><?= __('Actions') ?></h3>
	<ul class="side-nav">
		<li><?= $this->Html->link(__('New Client'), ['action' => 'add']) ?></li>
		<li><?= $this->Html->link(__('List Commands'), ['controller' => 'Commands', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Command'), ['controller' => 'Commands', 'action' => 'add']) ?> </li>
	</ul>
</div>
<div class="clients index large-10 medium-9 columns">
	<table cellpadding="0" cellspacing="0">
	<thead>
		<tr>
			<th><?= $this->Paginator->sort('id') ?></th>
			<th><?= $this->Paginator->sort('username') ?></th>
			<th><?= $this->Paginator->sort('password') ?></th>
			<th><?= $this->Paginator->sort('email') ?></th>
			<th><?= $this->Paginator->sort('firstname') ?></th>
			<th><?= $this->Paginator->sort('lastname') ?></th>
			<th class="actions"><?= __('Actions') ?></th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($clients as $client): ?>
		<tr>
			<td><?= $this->Number->format($client->id) ?></td>
			<td><?= h($client->username) ?></td>
			<td><?= h($client->password) ?></td>
			<td><?= $this->Number->format($client->email) ?></td>
			<td><?= $this->Number->format($client->firstname) ?></td>
			<td><?= $this->Number->format($client->lastname) ?></td>
			<td class="actions">
				<?= $this->Html->link(__('View'), ['action' => 'view', $client->id]) ?>
				<?= $this->Html->link(__('Edit'), ['action' => 'edit', $client->id]) ?>
				<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $client->id], ['confirm' => __('Are you sure you want to delete # {0}?', $client->id)]) ?>
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
