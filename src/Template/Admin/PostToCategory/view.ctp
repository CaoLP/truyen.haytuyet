<div class="actions columns col-lg-2 col-md-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="nav nav-stacked nav-pills">
        <li><?= $this->Html->link(__('Edit Post To Category'), ['action' => 'edit', $postToCategory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Post To Category'), ['action' => 'delete', $postToCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $postToCategory->id), 'class' => 'btn-danger']) ?> </li>
        <li><?= $this->Html->link(__('List Post To Category'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Post To Category'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Posts'), ['controller' => 'Posts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Post'), ['controller' => 'Posts', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="postToCategory view col-lg-10 col-md-9 columns">
    <h2><?= h($postToCategory->id) ?></h2>
    <div class="row">
        <div class="col-lg-5 columns strings">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h6 class="subheader"><?= __('Category') ?></h6>
                    <p><?= $postToCategory->has('category') ? $this->Html->link($postToCategory->category->name, ['controller' => 'Categories', 'action' => 'view', $postToCategory->category->id]) : '' ?></p>
                    <h6 class="subheader"><?= __('Post') ?></h6>
                    <p><?= $postToCategory->has('post') ? $this->Html->link($postToCategory->post->title, ['controller' => 'Posts', 'action' => 'view', $postToCategory->post->id]) : '' ?></p>
                </div>
            </div>
        </div>
        <div class="col-lg-2 columns numbers end">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h6 class="subheader"><?= __('Id') ?></h6>
                    <p><?= $this->Number->format($postToCategory->id) ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
