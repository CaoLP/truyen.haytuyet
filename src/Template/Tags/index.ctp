<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('New Tag'), ['action' => 'add']); ?></li>
        <li><?= $this->Html->link(__('List Posts'), ['controller' => 'Posts', 'action' => 'index']); ?></li>
                <li><?= $this->Html->link(__('New Post'), ['controller' => ' Posts', 'action' => 'add']); ?></li>
                </ul>
<?php $this->end(); ?>
<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
                        <th><?= $this->Paginator->sort('id'); ?></th>
                        <th><?= $this->Paginator->sort('post_id'); ?></th>
                        <th><?= $this->Paginator->sort('tag'); ?></th>
                        <th><?= $this->Paginator->sort('slug'); ?></th>
                        <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($tags as $tag): ?>
        <tr>
                        <td><?= $this->Number->format($tag->id) ?></td>
                                    <td>
                                <?= $tag->has('post') ? $this->Html->link($tag->post->title, ['controller' => 'Posts', 'action' => 'view', $tag->post->id]) : '' ?>
                            </td>
                                        <td><?= h($tag->tag) ?></td>
                                    <td><?= h($tag->slug) ?></td>
                                    <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $tag->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $tag->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $tag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tag->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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