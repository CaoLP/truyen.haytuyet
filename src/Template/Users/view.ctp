<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
    <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
    <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?> </li>
                </ul>
<?php $this->end(); ?>

<h2><?= h($user->name) ?></h2>
<div class="row">
        <div class="col-lg-5">
                                    <h6><?= __('Name') ?></h6>
                    <p><?= h($user->name) ?></p>
                                                    <h6><?= __('Username') ?></h6>
                    <p><?= h($user->username) ?></p>
                                                    <h6><?= __('Password') ?></h6>
                    <p><?= h($user->password) ?></p>
                                                    <h6><?= __('Email') ?></h6>
                    <p><?= h($user->email) ?></p>
                                                    <h6><?= __('Role') ?></h6>
                    <p><?= $user->has('role') ? $this->Html->link($user->role->name, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></p>
                                </div>
            <div class="col-lg-2">
                    <h6><?= __('Id') ?></h6>
                <p><?= $this->Number->format($user->id) ?></p>
                    <h6><?= __('Facebook') ?></h6>
                <p><?= $this->Number->format($user->facebook) ?></p>
                </div>
            <div class="col-lg-2">
                    <h6><?= __('Dob') ?></h6>
                <p><?= h($user->dob) ?></p>
                    <h6><?= __('Created') ?></h6>
                <p><?= h($user->created) ?></p>
                    <h6><?= __('Updated') ?></h6>
                <p><?= h($user->updated) ?></p>
                </div>
        </div>

