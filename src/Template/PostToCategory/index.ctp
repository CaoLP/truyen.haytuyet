<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('New Post To Category'), ['action' => 'add']); ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']); ?></li>
                <li><?= $this->Html->link(__('New Category'), ['controller' => ' Categories', 'action' => 'add']); ?></li>
                    <li><?= $this->Html->link(__('List Posts'), ['controller' => 'Posts', 'action' => 'index']); ?></li>
                <li><?= $this->Html->link(__('New Post'), ['controller' => ' Posts', 'action' => 'add']); ?></li>
                </ul>
<?php $this->end(); ?>
<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
                        <th><?= $this->Paginator->sort('id'); ?></th>
                        <th><?= $this->Paginator->sort('category_id'); ?></th>
                        <th><?= $this->Paginator->sort('post_id'); ?></th>
                        <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($postToCategory as $postToCategory): ?>
        <tr>
                        <td><?= $this->Number->format($postToCategory->id) ?></td>
                                    <td>
                                <?= $postToCategory->has('category') ? $this->Html->link($postToCategory->category->name, ['controller' => 'Categories', 'action' => 'view', $postToCategory->category->id]) : '' ?>
                            </td>
                                        <td>
                                <?= $postToCategory->has('post') ? $this->Html->link($postToCategory->post->title, ['controller' => 'Posts', 'action' => 'view', $postToCategory->post->id]) : '' ?>
                            </td>
                                        <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $postToCategory->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $postToCategory->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $postToCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $postToCategory->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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