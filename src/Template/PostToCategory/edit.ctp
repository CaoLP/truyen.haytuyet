<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
        <li><?=
            $this->Form->postLink(
            __('Delete'),
            ['action' => 'delete', $postToCategory->id],
            ['confirm' => __('Are you sure you want to delete # {0}?', $postToCategory->id)]
            )
            ?></li>
        <li><?= $this->Html->link(__('List Post To Category'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Posts'), ['controller' => 'Posts', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New Post'), ['controller' => 'Posts', 'action' => 'add']) ?> </li>
                </ul>
<?php $this->end(); ?>
<?= $this->Form->create($postToCategory); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Post To Category']) ?></legend>
    <?php
        echo $this->Form->input('category_id', ['options' => $categories]);
                echo $this->Form->input('post_id', ['options' => $posts]);
                ?>
</fieldset>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>