<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('New Post'), ['action' => 'add']); ?></li>
        <li><?= $this->Html->link(__('List Posts'), ['controller' => 'Posts', 'action' => 'index']); ?></li>
                <li><?= $this->Html->link(__('New Parent Post'), ['controller' => ' Posts', 'action' => 'add']); ?></li>
                    <li><?= $this->Html->link(__('List PostToCategory'), ['controller' => 'PostToCategory', 'action' => 'index']); ?></li>
                <li><?= $this->Html->link(__('New Post To Category'), ['controller' => ' PostToCategory', 'action' => 'add']); ?></li>
                    <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']); ?></li>
                <li><?= $this->Html->link(__('New Tag'), ['controller' => ' Tags', 'action' => 'add']); ?></li>
                </ul>
<?php $this->end(); ?>
<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
                        <th><?= $this->Paginator->sort('id'); ?></th>
                        <th><?= $this->Paginator->sort('title'); ?></th>
                        <th><?= $this->Paginator->sort('slug'); ?></th>
                        <th><?= $this->Paginator->sort('excert'); ?></th>
                        <th><?= $this->Paginator->sort('parent_id'); ?></th>
                        <th><?= $this->Paginator->sort('lft'); ?></th>
                        <th><?= $this->Paginator->sort('rght'); ?></th>
                        <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($posts as $post): ?>
        <tr>
                        <td><?= $this->Number->format($post->id) ?></td>
                                    <td><?= h($post->title) ?></td>
                                    <td><?= h($post->slug) ?></td>
                                    <td><?= h($post->excert) ?></td>
                                    <td>
                                <?= $post->has('parent_post') ? $this->Html->link($post->parent_post->title, ['controller' => 'Posts', 'action' => 'view', $post->parent_post->id]) : '' ?>
                            </td>
                                        <td><?= $this->Number->format($post->lft) ?></td>
                                    <td><?= $this->Number->format($post->rght) ?></td>
                                    <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $post->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $post->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $post->id], ['confirm' => __('Are you sure you want to delete # {0}?', $post->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
            </td>
        </tr>

        <?php endforeach; ?>
    </tbody>
</table>
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
    </ul>
    <p><?= $this->Paginator->counter() ?></p>
</div>