<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
        <li><?=
            $this->Form->postLink(
            __('Delete'),
            ['action' => 'delete', $category->id],
            ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]
            )
            ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Post To Category'), ['controller' => 'PostToCategory', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New Post To Category'), ['controller' => 'PostToCategory', 'action' => 'add']) ?> </li>
                </ul>
<?php $this->end(); ?>
<?= $this->Form->create($category); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Category']) ?></legend>
    <?php
        echo $this->Form->input('name');
                echo $this->Form->input('slug');
                ?>
</fieldset>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>