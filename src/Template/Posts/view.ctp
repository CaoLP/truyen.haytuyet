<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('Edit Post'), ['action' => 'edit', $post->id]) ?> </li>
    <li><?= $this->Form->postLink(__('Delete Post'), ['action' => 'delete', $post->id], ['confirm' => __('Are you sure you want to delete # {0}?', $post->id)]) ?> </li>
    <li><?= $this->Html->link(__('List Posts'), ['action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Post'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Parent Posts'), ['controller' => 'Posts', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New Parent Post'), ['controller' => 'Posts', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Post To Category'), ['controller' => 'PostToCategory', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New Post To Category'), ['controller' => 'PostToCategory', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
                </ul>
<?php $this->end(); ?>

<h2><?= h($post->title) ?></h2>
<div class="row">
        <div class="col-lg-5">
                                    <h6><?= __('Title') ?></h6>
                    <p><?= h($post->title) ?></p>
                                                    <h6><?= __('Slug') ?></h6>
                    <p><?= h($post->slug) ?></p>
                                                    <h6><?= __('Excert') ?></h6>
                    <p><?= h($post->excert) ?></p>
                                                    <h6><?= __('Parent Post') ?></h6>
                    <p><?= $post->has('parent_post') ? $this->Html->link($post->parent_post->title, ['controller' => 'Posts', 'action' => 'view', $post->parent_post->id]) : '' ?></p>
                                </div>
            <div class="col-lg-2">
                    <h6><?= __('Id') ?></h6>
                <p><?= $this->Number->format($post->id) ?></p>
                    <h6><?= __('Lft') ?></h6>
                <p><?= $this->Number->format($post->lft) ?></p>
                    <h6><?= __('Rght') ?></h6>
                <p><?= $this->Number->format($post->rght) ?></p>
                    <h6><?= __('Create By') ?></h6>
                <p><?= $this->Number->format($post->create_by) ?></p>
                    <h6><?= __('Update By') ?></h6>
                <p><?= $this->Number->format($post->update_by) ?></p>
                </div>
            <div class="col-lg-2">
                    <h6><?= __('Created') ?></h6>
                <p><?= h($post->created) ?></p>
                    <h6><?= __('Updated') ?></h6>
                <p><?= h($post->updated) ?></p>
                </div>
        </div>
    <div class="row texts">
            <div class="col-lg-9">
                <h6><?= __('Body') ?></h6>
                <?= $this->Text->autoParagraph(h($post->body)); ?>
            </div>
        </div>
    <div class="related row">
        <div class = "col-lg-12">
            <h4><?= __('Related PostToCategory') ?></h4>
            <?php if (!empty($post->post_to_category)): ?>
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
                    <?php foreach ($post->post_to_category as $postToCategory): ?>
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
<div class="related row">
        <div class = "col-lg-12">
            <h4><?= __('Related Posts') ?></h4>
            <?php if (!empty($post->child_posts)): ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                                            <th><?= __('Id') ?></th>
                                            <th><?= __('Title') ?></th>
                                            <th><?= __('Slug') ?></th>
                                            <th><?= __('Excert') ?></th>
                                            <th><?= __('Body') ?></th>
                                            <th><?= __('Parent Id') ?></th>
                                            <th><?= __('Lft') ?></th>
                                            <th><?= __('Rght') ?></th>
                                            <th><?= __('Created') ?></th>
                                            <th><?= __('Create By') ?></th>
                                            <th><?= __('Updated') ?></th>
                                            <th><?= __('Update By') ?></th>
                                            <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($post->child_posts as $childPosts): ?>
                    <tr>
                                            <td><?= h($childPosts->id) ?></td>
                                            <td><?= h($childPosts->title) ?></td>
                                            <td><?= h($childPosts->slug) ?></td>
                                            <td><?= h($childPosts->excert) ?></td>
                                            <td><?= h($childPosts->body) ?></td>
                                            <td><?= h($childPosts->parent_id) ?></td>
                                            <td><?= h($childPosts->lft) ?></td>
                                            <td><?= h($childPosts->rght) ?></td>
                                            <td><?= h($childPosts->created) ?></td>
                                            <td><?= h($childPosts->create_by) ?></td>
                                            <td><?= h($childPosts->updated) ?></td>
                                            <td><?= h($childPosts->update_by) ?></td>
                                                                    <td class="actions">
                            <?= $this->Html->link(__('View'), ['controller' => 'Posts', 'action' => 'view', $childPosts->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['controller' => 'Posts', 'action' => 'edit', $childPosts->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'Posts', 'action' => 'delete', $childPosts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childPosts->id)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php endif; ?>
    </div>
</div>
<div class="related row">
        <div class = "col-lg-12">
            <h4><?= __('Related Tags') ?></h4>
            <?php if (!empty($post->tags)): ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                                            <th><?= __('Id') ?></th>
                                            <th><?= __('Post Id') ?></th>
                                            <th><?= __('Tag') ?></th>
                                            <th><?= __('Slug') ?></th>
                                            <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($post->tags as $tags): ?>
                    <tr>
                                            <td><?= h($tags->id) ?></td>
                                            <td><?= h($tags->post_id) ?></td>
                                            <td><?= h($tags->tag) ?></td>
                                            <td><?= h($tags->slug) ?></td>
                                                                    <td class="actions">
                            <?= $this->Html->link(__('View'), ['controller' => 'Tags', 'action' => 'view', $tags->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['controller' => 'Tags', 'action' => 'edit', $tags->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tags', 'action' => 'delete', $tags->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tags->id)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php endif; ?>
    </div>
</div>

