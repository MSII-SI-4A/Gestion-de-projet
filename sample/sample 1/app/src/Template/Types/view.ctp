<div class="actions columns large-2 medium-3">
	<h3><?= __('Actions') ?></h3>
	<ul class="side-nav">
		<li><?= $this->Html->link(__('Edit Type'), ['action' => 'edit', $type->id]) ?> </li>
		<li><?= $this->Form->postLink(__('Delete Type'), ['action' => 'delete', $type->id], ['confirm' => __('Are you sure you want to delete # {0}?', $type->id)]) ?> </li>
		<li><?= $this->Html->link(__('List Types'), ['action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Type'), ['action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
	</ul>
</div>
<div class="types view large-10 medium-9 columns">
	<h2><?= h($type->name) ?></h2>
	<div class="row">
		<div class="large-5 columns strings">
			<h6 class="subheader"><?= __('Name') ?></h6>
			<p><?= h($type->name) ?></p>
		</div>
		<div class="large-2 columns numbers end">
			<h6 class="subheader"><?= __('Id') ?></h6>
			<p><?= $this->Number->format($type->id) ?></p>
		</div>
	</div>
</div>
<div class="related row">
	<div class="column large-12">
	<h4 class="subheader"><?= __('Related Products') ?></h4>
	<?php if (!empty($type->products)): ?>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th><?= __('Id') ?></th>
			<th><?= __('Name') ?></th>
			<th><?= __('Description') ?></th>
			<th><?= __('Type Id') ?></th>
			<th><?= __('Value') ?></th>
			<th class="actions"><?= __('Actions') ?></th>
		</tr>
		<?php foreach ($type->products as $products): ?>
		<tr>
			<td><?= h($products->id) ?></td>
			<td><?= h($products->name) ?></td>
			<td><?= h($products->description) ?></td>
			<td><?= h($products->type_id) ?></td>
			<td><?= h($products->value) ?></td>

			<td class="actions">
				<?= $this->Html->link(__('View'), ['controller' => 'Products', 'action' => 'view', $products->id]) ?>

				<?= $this->Html->link(__('Edit'), ['controller' => 'Products', 'action' => 'edit', $products->id]) ?>

				<?= $this->Form->postLink(__('Delete'), ['controller' => 'Products', 'action' => 'delete', $products->id], ['confirm' => __('Are you sure you want to delete # {0}?', $products->id)]) ?>

			</td>
		</tr>

		<?php endforeach; ?>
	</table>
	<?php endif; ?>
	</div>
</div>
