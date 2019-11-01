<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContractorAnswer $contractorAnswer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Contractor Answer'), ['action' => 'edit', $contractorAnswer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contractor Answer'), ['action' => 'delete', $contractorAnswer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contractorAnswer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contractor Answers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contractor Answer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contractors'), ['controller' => 'Contractors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contractor'), ['controller' => 'Contractors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contractorAnswers view large-9 medium-8 columns content">
    <h3><?= h($contractorAnswer->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Contractor') ?></th>
            <td><?= $contractorAnswer->has('contractor') ? $this->Html->link($contractorAnswer->contractor->id, ['controller' => 'Contractors', 'action' => 'view', $contractorAnswer->contractor->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Question') ?></th>
            <td><?= $contractorAnswer->has('question') ? $this->Html->link($contractorAnswer->question->id, ['controller' => 'Questions', 'action' => 'view', $contractorAnswer->question->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client') ?></th>
            <td><?= $contractorAnswer->has('client') ? $this->Html->link($contractorAnswer->client->id, ['controller' => 'Clients', 'action' => 'view', $contractorAnswer->client->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($contractorAnswer->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created By') ?></th>
            <td><?= $this->Number->format($contractorAnswer->created_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified By') ?></th>
            <td><?= $this->Number->format($contractorAnswer->modified_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Year') ?></th>
            <td><?= $this->Number->format($contractorAnswer->year) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($contractorAnswer->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($contractorAnswer->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Answer') ?></h4>
        <?= $this->Text->autoParagraph(h($contractorAnswer->answer)); ?>
    </div>
</div>
