<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContractorAnswer $contractorAnswer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $contractorAnswer->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $contractorAnswer->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Contractor Answers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Contractors'), ['controller' => 'Contractors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contractor'), ['controller' => 'Contractors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contractorAnswers form large-9 medium-8 columns content">
    <?= $this->Form->create($contractorAnswer) ?>
    <fieldset>
        <legend><?= __('Edit Contractor Answer') ?></legend>
        <?php
            echo $this->Form->control('contractor_id', ['options' => $contractors]);
            echo $this->Form->control('question_id', ['options' => $questions]);
            echo $this->Form->control('created_by');
            echo $this->Form->control('modified_by');
            echo $this->Form->control('answer');
            echo $this->Form->control('year');
            echo $this->Form->control('client_id', ['options' => $clients, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
