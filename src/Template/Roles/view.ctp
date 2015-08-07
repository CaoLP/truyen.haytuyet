<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('Edit Role'), ['action' => 'edit', $role->id]) ?> </li>
    <li><?= $this->Form->postLink(__('Delete Role'), ['action' => 'delete', $role->id], ['confirm' => __('Are you sure you want to delete # {0}?', $role->id)]) ?> </li>
    <li><?= $this->Html->link(__('List Roles'), ['action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Role'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
                </ul>
<?php $this->end(); ?>

<h2><?= h($role->name) ?></h2>
<div class="row">
        <div class="col-lg-5">
                                    <h6><?= __('Name') ?></h6>
                    <p><?= h($role->name) ?></p>
                                </div>
            <div class="col-lg-2">
                    <h6><?= __('Id') ?></h6>
                <p><?= $this->Number->format($role->id) ?></p>
                </div>
            </div>
<div class="related row">
        <div class = "col-lg-12">
            <h4><?= __('Related Users') ?></h4>
            <?php if (!empty($role->users)): ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                                            <th><?= __('Id') ?></th>
                                            <th><?= __('Name') ?></th>
                                            <th><?= __('Username') ?></th>
                                            <th><?= __('Password') ?></th>
                                            <th><?= __('Email') ?></th>
                                            <th><?= __('Dob') ?></th>
                                            <th><?= __('Facebook') ?></th>
                                            <th><?= __('Role Id') ?></th>
                                            <th><?= __('Created') ?></th>
                                            <th><?= __('Updated') ?></th>
                                            <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($role->users as $users): ?>
                    <tr>
                                            <td><?= h($users->id) ?></td>
                                            <td><?= h($users->name) ?></td>
                                            <td><?= h($users->username) ?></td>
                                            <td><?= h($users->password) ?></td>
                                            <td><?= h($users->email) ?></td>
                                            <td><?= h($users->dob) ?></td>
                                            <td><?= h($users->facebook) ?></td>
                                            <td><?= h($users->role_id) ?></td>
                                            <td><?= h($users->created) ?></td>
                                            <td><?= h($users->updated) ?></td>
                                                                    <td class="actions">
                            <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php endif; ?>
    </div>
</div>

