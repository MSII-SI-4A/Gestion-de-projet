<div class="users form">
<?php echo $this->Form->create('Client');?>
    <fieldset>
        <legend><?php echo __('Create user'); ?></legend>
        <?= $this->Form->input('username') ?>
        <?= $this->Form->input('email') ?>
        <?= $this->Form->input('firstname') ?>
        <?= $this->Form->input('lastname') ?>
        <?= $this->Form->input('password') ?>
    </fieldset>
	<?= $this->Form->button(__('Créer')) ?>
	<?php echo $this->Form->end();?>
</div>