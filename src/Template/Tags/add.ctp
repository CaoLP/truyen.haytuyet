<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
        <li><?= $this->Html->link(__('List Tags'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Posts'), ['controller' => 'Posts', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New Post'), ['controller' => 'Posts', 'action' => 'add']) ?> </li>
                </ul>
<?php $this->end(); ?>
<?= $this->Form->create($tag); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Tag']) ?></legend>
    <?php
        echo $this->Form->input('post_id', ['options' => $posts]);
                echo $this->Form->input('tag');
                echo $this->Form->input('slug');
                ?>
</fieldset>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>