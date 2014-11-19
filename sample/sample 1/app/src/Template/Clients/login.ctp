<?php $this->assign('title', __('Login')) ?>

<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('Client'); ?>
    <fieldset>
        <legend>
            <?php echo __('Please enter your username and password'); ?>
        </legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
    ?>
    </fieldset>
    <div class="options"><?= $this->Html->link(__('Create an account'), ['controller' => 'Clients', 'action' => 'create']) ?></div>
<?= $this->Form->button(__('Submit')) ?>
<?php echo $this->Form->end(); ?>
</div>