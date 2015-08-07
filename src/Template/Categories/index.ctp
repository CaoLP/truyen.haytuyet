<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('New Category'), ['action' => 'add']); ?></li>
        <li><?= $this->Html->link(__('List PostToCategory'), ['controller' => 'PostToCategory', 'action' => 'index']); ?></li>
                <li><?= $this->Html->link(__('New Post To Category'), ['controller' => ' PostToCategory', 'action' => 'add']); ?></li>
                </ul>
<?php $this->end(); ?>
<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
                        <th><?= $this->Paginator->sort('id'); ?></th>
                        <th><?= $this->Paginator->sort('name'); ?></th>
                        <th><?= $this->Paginator->sort('slug'); ?></th>
                        <th><?= $this->Paginator->sort('created'); ?></th>
                        <th><?= $this->Paginator->sort('updated'); ?></th>
                        <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($categories as $category): ?>
        <tr>
                        <td><?= $this->Number->format($category->id) ?></td>
                                    <td><?= h($category->name) ?></td>
                                    <td><?= h($category->slug) ?></td>
                                    <td><?= h($category->created) ?></td>
                                    <td><?= h($category->updated) ?></td>
                                    <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $category->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $category->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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