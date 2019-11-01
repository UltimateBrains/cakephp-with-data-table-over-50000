<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lead $lead
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Lead'), ['action' => 'edit', $lead->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Lead'), ['action' => 'delete', $lead->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lead->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Leads'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lead'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contractors'), ['controller' => 'Contractors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contractor'), ['controller' => 'Contractors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Lead Status'), ['controller' => 'LeadStatus', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lead Status'), ['controller' => 'LeadStatus', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="leads view large-9 medium-8 columns content">
    <h3><?= h($lead->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Company Name') ?></th>
            <td><?= h($lead->company_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contact Name First') ?></th>
            <td><?= h($lead->contact_name_first) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contact Name Last') ?></th>
            <td><?= h($lead->contact_name_last) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone No') ?></th>
            <td><?= h($lead->phone_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($lead->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($lead->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= h($lead->state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zip Code') ?></th>
            <td><?= h($lead->zip_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description Of Work') ?></th>
            <td><?= h($lead->description_of_work) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client') ?></th>
            <td><?= $lead->has('client') ? $this->Html->link($lead->client->id, ['controller' => 'Clients', 'action' => 'view', $lead->client->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contractor') ?></th>
            <td><?= $lead->has('contractor') ? $this->Html->link($lead->contractor->id, ['controller' => 'Contractors', 'action' => 'view', $lead->contractor->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lead Status') ?></th>
            <td><?= $lead->has('lead_status') ? $this->Html->link($lead->lead_status->id, ['controller' => 'LeadStatus', 'action' => 'view', $lead->lead_status->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($lead->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created By') ?></th>
            <td><?= $this->Number->format($lead->created_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified By') ?></th>
            <td><?= $this->Number->format($lead->modified_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($lead->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($lead->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Address') ?></h4>
        <?= $this->Text->autoParagraph(h($lead->address)); ?>
    </div>
</div>
