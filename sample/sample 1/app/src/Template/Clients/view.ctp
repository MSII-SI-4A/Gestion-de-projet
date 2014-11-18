<div class="actions columns large-2 medium-3">
	<h3><?= __('Actions') ?></h3>
	<ul class="side-nav">
		<li><?= $this->Html->link(__('Edit Client'), ['action' => 'edit', $client->id]) ?> </li>
		<li><?= $this->Form->postLink(__('Delete Client'), ['action' => 'delete', $client->id], ['confirm' => __('Are you sure you want to delete # {0}?', $client->id)]) ?> </li>
		<li><?= $this->Html->link(__('List Clients'), ['action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Client'), ['action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('List Commands'), ['controller' => 'Commands', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Command'), ['controller' => 'Commands', 'action' => 'add']) ?> </li>
	</ul>
</div>
<div class="clients view large-10 medium-9 columns">
	<h2><?= h($client->id) ?></h2>
	<div class="row">
		<div class="large-5 columns strings">
			<h6 class="subheader"><?= __('Username') ?></h6>
			<p><?= h($client->username) ?></p>
			<h6 class="subheader"><?= __('Password') ?></h6>
			<p><?= h($client->password) ?></p>
		</div>
		<div class="large-2 columns numbers end">
			<h6 class="subheader"><?= __('Id') ?></h6>
			<p><?= $this->Number->format($client->id) ?></p>
			<h6 class="subheader"><?= __('Email') ?></h6>
			<p><?= $this->Number->format($client->email) ?></p>
			<h6 class="subheader"><?= __('Firstname') ?></h6>
			<p><?= $this->Number->format($client->firstname) ?></p>
			<h6 class="subheader"><?= __('Lastname') ?></h6>
			<p><?= $this->Number->format($client->lastname) ?></p>
		</div>
	</div>
</div>
<div class="related row">
	<div class="column large-12">
	<h4 class="subheader"><?= __('Related Commands') ?></h4>
	<?php if (!empty($client->commands)): ?>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th><?= __('Id') ?></th>
			<th><?= __('Client Id') ?></th>
			<th class="actions"><?= __('Actions') ?></th>
		</tr>
		<?php foreach ($client->commands as $commands): ?>
		<tr>
			<td><?= h($commands->id) ?></td>
			<td><?= h($commands->client_id) ?></td>

			<td class="actions">
				<?= $this->Html->link(__('View'), ['controller' => 'Commands', 'action' => 'view', $commands->id]) ?>

				<?= $this->Html->link(__('Edit'), ['controller' => 'Commands', 'action' => 'edit', $commands->id]) ?>

				<?= $this->Form->postLink(__('Delete'), ['controller' => 'Commands', 'action' => 'delete', $commands->id], ['confirm' => __('Are you sure you want to delete # {0}?', $commands->id)]) ?>

			</td>
		</tr>

		<?php endforeach; ?>
	</table>
	<?php endif; ?>
	</div>
</div>
