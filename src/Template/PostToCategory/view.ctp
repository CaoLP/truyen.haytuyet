<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('Edit Post To Category'), ['action' => 'edit', $postToCategory->id]) ?> </li>
    <li><?= $this->Form->postLink(__('Delete Post To Category'), ['action' => 'delete', $postToCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $postToCategory->id)]) ?> </li>
    <li><?= $this->Html->link(__('List Post To Category'), ['action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Post To Category'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Posts'), ['controller' => 'Posts', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New Post'), ['controller' => 'Posts', 'action' => 'add']) ?> </li>
                </ul>
<?php $this->end(); ?>

<h2><?= h($postToCategory->id) ?></h2>
<div class="row">
        <div class="col-lg-5">
                                    <h6><?= __('Category') ?></h6>
                    <p><?= $postToCategory->has('category') ? $this->Html->link($postToCategory->category->name, ['controller' => 'Categories', 'action' => 'view', $postToCategory->category->id]) : '' ?></p>
                                                    <h6><?= __('Post') ?></h6>
                    <p><?= $postToCategory->has('post') ? $this->Html->link($postToCategory->post->title, ['controller' => 'Posts', 'action' => 'view', $postToCategory->post->id]) : '' ?></p>
                                </div>
            <div class="col-lg-2">
                    <h6><?= __('Id') ?></h6>
                <p><?= $this->Number->format($postToCategory->id) ?></p>
                </div>
            </div>

