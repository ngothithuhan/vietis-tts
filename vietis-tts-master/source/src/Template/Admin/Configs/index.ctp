<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Config[]|\Cake\Collection\CollectionInterface $configs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Config'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="configs index large-9 medium-8 columns content">
    <h3><?= __('Configs') ?></h3>
    <table cellpadding="0" cellspacing="0" border="1" style="width: 100%; text-align: center;">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('key') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('value') ?></th>
                <th scope="col"><?= $this->Paginator->sort('special') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated_at') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($configs as $config): ?>
            <tr>
                <td><?= $this->Number->format($config->id) ?></td>
                <td><?= h($config->key) ?></td>
                <td><?= $this->Number->format($config->type) ?></td>
                <td><?= h($config->value) ?></td>
                <td><?= h($config->special) ?></td>
                <td><?= $this->Number->format($config->created_id) ?></td>
                <td><?= $config->has('user') ? $this->Html->link($config->user->id, ['controller' => 'Users', 'action' => 'view', $config->user->id]) : '' ?></td>
                <td><?= h($config->created_at) ?></td>
                <td><?= h($config->updated_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $config->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $config->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $config->id], ['confirm' => __('Are you sure you want to delete # {0}?', $config->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
