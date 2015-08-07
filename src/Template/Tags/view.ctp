<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('Edit Tag'), ['action' => 'edit', $tag->id]) ?> </li>
    <li><?= $this->Form->postLink(__('Delete Tag'), ['action' => 'delete', $tag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tag->id)]) ?> </li>
    <li><?= $this->Html->link(__('List Tags'), ['action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Tag'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Posts'), ['controller' => 'Posts', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New Post'), ['controller' => 'Posts', 'action' => 'add']) ?> </li>
                </ul>
<?php $this->end(); ?>

<h2><?= h($tag->id) ?></h2>
<div class="row">
        <div class="col-lg-5">
                                    <h6><?= __('Post') ?></h6>
                    <p><?= $tag->has('post') ? $this->Html->link($tag->post->title, ['controller' => 'Posts', 'action' => 'view', $tag->post->id]) : '' ?></p>
                                                    <h6><?= __('Tag') ?></h6>
                    <p><?= h($tag->tag) ?></p>
                                                    <h6><?= __('Slug') ?></h6>
                    <p><?= h($tag->slug) ?></p>
                                </div>
            <div class="col-lg-2">
                    <h6><?= __('Id') ?></h6>
                <p><?= $this->Number->format($tag->id) ?></p>
                </div>
            </div>

