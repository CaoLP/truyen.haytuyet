<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('Edit Category'), ['action' => 'edit', $category->id]) ?> </li>
    <li><?= $this->Form->postLink(__('Delete Category'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?> </li>
    <li><?= $this->Html->link(__('List Categories'), ['action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Category'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Post To Category'), ['controller' => 'PostToCategory', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New Post To Category'), ['controller' => 'PostToCategory', 'action' => 'add']) ?> </li>
                </ul>
<?php $this->end(); ?>

<h2><?= h($category->name) ?></h2>
<div class="row">
        <div class="col-lg-5">
                                    <h6><?= __('Name') ?></h6>
                    <p><?= h($category->name) ?></p>
                                                    <h6><?= __('Slug') ?></h6>
                    <p><?= h($category->slug) ?></p>
                                </div>
            <div class="col-lg-2">
                    <h6><?= __('Id') ?></h6>
                <p><?= $this->Number->format($category->id) ?></p>
                </div>
            <div class="col-lg-2">
                    <h6><?= __('Created') ?></h6>
                <p><?= h($category->created) ?></p>
                    <h6><?= __('Updated') ?></h6>
                <p><?= h($category->updated) ?></p>
                </div>
        </div>
<div class="related row">
        <div class = "col-lg-12">
            <h4><?= __('Related PostToCategory') ?></h4>
            <?php if (!empty($category->post_to_category)): ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                                            <th><?= __('Id') ?></th>
                                            <th><?= __('Category Id') ?></th>
                                            <th><?= __('Post Id') ?></th>
                                            <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($category->post_to_category as $postToCategory): ?>
                    <tr>
                                            <td><?= h($postToCategory->id) ?></td>
                                            <td><?= h($postToCategory->category_id) ?></td>
                                            <td><?= h($postToCategory->post_id) ?></td>
                                                                    <td class="actions">
                            <?= $this->Html->link(__('View'), ['controller' => 'PostToCategory', 'action' => 'view', $postToCategory->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['controller' => 'PostToCategory', 'action' => 'edit', $postToCategory->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'PostToCategory', 'action' => 'delete', $postToCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $postToCategory->id)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php endif; ?>
    </div>
</div>

