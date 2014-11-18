<div class="actions columns large-2 medium-3">
	<h3><?= __('Actions') ?></h3>
	<ul class="side-nav">
		<li><?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->id]) ?> </li>
		<li><?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?> </li>
		<li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?> </li>
	</ul>
</div>
<div class="products view large-10 medium-9 columns">
	<h2><?= h($product->name) ?></h2>
	<div class="row">
		<div class="large-5 columns strings">
			<h6 class="subheader"><?= __('Name') ?></h6>
			<p><?= h($product->name) ?></p>
			<h6 class="subheader"><?= __('Type') ?></h6>
			<p><?= $product->has('type') ? $this->Html->link($product->type->name, ['controller' => 'Types', 'action' => 'view', $product->type->id]) : '' ?>" ?></p>
		</div>
		<div class="large-2 columns numbers end">
			<h6 class="subheader"><?= __('Id') ?></h6>
			<p><?= $this->Number->format($product->id) ?></p>
			<h6 class="subheader"><?= __('Value') ?></h6>
			<p><?= $this->Number->format($product->value) ?></p>
		</div>
	</div>
	<div class="row texts">
		<div class="columns large-9">
			<h6 class="subheader"><?= __('Description') ?></h6>
			<?= $this->Text->autoParagraph(h($product->description)); ?>

		</div>
	</div>
</div>
