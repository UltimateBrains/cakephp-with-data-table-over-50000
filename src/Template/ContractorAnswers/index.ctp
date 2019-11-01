<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContractorAnswer[]|\Cake\Collection\CollectionInterface $contractorAnswers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Contractor Answer'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contractors'), ['controller' => 'Contractors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contractor'), ['controller' => 'Contractors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contractorAnswers index large-9 medium-8 columns content">
    <h3><?= __('Contractor Answers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contractor_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('question_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('year') ?></th>
                <th scope="col"><?= $this->Paginator->sort('client_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contractorAnswers as $contractorAnswer): ?>
            <tr>
                <td><?= $this->Number->format($contractorAnswer->id) ?></td>
                <td><?= $contractorAnswer->has('contractor') ? $this->Html->link($contractorAnswer->contractor->id, ['controller' => 'Contractors', 'action' => 'view', $contractorAnswer->contractor->id]) : '' ?></td>
                <td><?= $contractorAnswer->has('question') ? $this->Html->link($contractorAnswer->question->id, ['controller' => 'Questions', 'action' => 'view', $contractorAnswer->question->id]) : '' ?></td>
                <td><?= h($contractorAnswer->created) ?></td>
                <td><?= h($contractorAnswer->modified) ?></td>
                <td><?= $this->Number->format($contractorAnswer->created_by) ?></td>
                <td><?= $this->Number->format($contractorAnswer->modified_by) ?></td>
                <td><?= $this->Number->format($contractorAnswer->year) ?></td>
                <td><?= $contractorAnswer->has('client') ? $this->Html->link($contractorAnswer->client->id, ['controller' => 'Clients', 'action' => 'view', $contractorAnswer->client->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $contractorAnswer->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contractorAnswer->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contractorAnswer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contractorAnswer->id)]) ?>
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
