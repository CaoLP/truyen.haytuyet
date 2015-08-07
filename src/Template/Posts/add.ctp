<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
        <li><?= $this->Html->link(__('List Posts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Parent Posts'), ['controller' => 'Posts', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New Parent Post'), ['controller' => 'Posts', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Post To Category'), ['controller' => 'PostToCategory', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New Post To Category'), ['controller' => 'PostToCategory', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
                </ul>
<?php $this->end(); ?>
<?= $this->Form->create($post); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Post']) ?></legend>
    <?php
        echo $this->Form->input('title');
                echo $this->Form->input('slug');
                echo $this->Form->input('excert');
                echo $this->Form->input('body');
                echo $this->Form->input('parent_id', ['options' => $parentPosts]);
                echo $this->Form->input('lft');
                echo $this->Form->input('rght');
                echo $this->Form->input('create_by');
                echo $this->Form->input('update_by');
                ?>
</fieldset>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>