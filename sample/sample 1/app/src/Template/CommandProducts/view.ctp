<div class="actions columns large-2 medium-3">
	<h3><?= __('Actions') ?></h3>
	<ul class="side-nav">
		<li><?= $this->Html->link(__('Edit Command Product'), ['action' => 'edit', $commandProduct->command_id]) ?> </li>
		<li><?= $this->Form->postLink(__('Delete Command Product'), ['action' => 'delete', $commandProduct->command_id], ['confirm' => __('Are you sure you want to delete # {0}?', $commandProduct->command_id)]) ?> </li>
		<li><?= $this->Html->link(__('List Command Products'), ['action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Command Product'), ['action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('List Commands'), ['controller' => 'Commands', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Command'), ['controller' => 'Commands', 'action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
	</ul>
</div>
<div class="commandProducts view large-10 medium-9 columns">
	<h2><?= h($commandProduct->command_id) ?></h2>
	<div class="row">
		<div class="large-5 columns strings">
			<h6 class="subheader"><?= __('Command') ?></h6>
			<p><?= $commandProduct->has('command') ? $this->Html->link($commandProduct->command->id, ['controller' => 'Commands', 'action' => 'view', $commandProduct->command->id]) : '' ?>" ?></p>
			<h6 class="subheader"><?= __('Product') ?></h6>
			<p><?= $commandProduct->has('product') ? $this->Html->link($commandProduct->product->name, ['controller' => 'Products', 'action' => 'view', $commandProduct->product->id]) : '' ?>" ?></p>
		</div>
		<div class="large-2 columns numbers end">
			<h6 class="subheader"><?= __('Nb') ?></h6>
			<p><?= $this->Number->format($commandProduct->nb) ?></p>
		</div>
	</div>
</div>
