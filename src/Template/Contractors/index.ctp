<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contractor[]|\Cake\Collection\CollectionInterface $contractors
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Contractor'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customer Representative'), ['controller' => 'CustomerRepresentative', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer Representative'), ['controller' => 'CustomerRepresentative', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Billing Details'), ['controller' => 'BillingDetails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Billing Detail'), ['controller' => 'BillingDetails', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Requests'), ['controller' => 'ClientRequests', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Request'), ['controller' => 'ClientRequests', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contractor Answers'), ['controller' => 'ContractorAnswers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contractor Answer'), ['controller' => 'ContractorAnswers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contractor Contacts'), ['controller' => 'ContractorContacts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contractor Contact'), ['controller' => 'ContractorContacts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contractor Docs'), ['controller' => 'ContractorDocs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contractor Doc'), ['controller' => 'ContractorDocs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contractor Invoices'), ['controller' => 'ContractorInvoices', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contractor Invoice'), ['controller' => 'ContractorInvoices', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contractor Services'), ['controller' => 'ContractorServices', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contractor Service'), ['controller' => 'ContractorServices', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contractor Sites'), ['controller' => 'ContractorSites', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contractor Site'), ['controller' => 'ContractorSites', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contractor Tempsites'), ['controller' => 'ContractorTempsites', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contractor Tempsite'), ['controller' => 'ContractorTempsites', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contractor Users'), ['controller' => 'ContractorUsers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contractor User'), ['controller' => 'ContractorUsers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Documents'), ['controller' => 'Documents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Document'), ['controller' => 'Documents', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Explanations'), ['controller' => 'Explanations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Explanation'), ['controller' => 'Explanations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Icons'), ['controller' => 'Icons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Icon'), ['controller' => 'Icons', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Leads'), ['controller' => 'Leads', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lead'), ['controller' => 'Leads', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Notes'), ['controller' => 'Notes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Note'), ['controller' => 'Notes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Notes Old'), ['controller' => 'NotesOld', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Notes Old'), ['controller' => 'NotesOld', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Overall Icons'), ['controller' => 'OverallIcons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Overall Icon'), ['controller' => 'OverallIcons', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Payments'), ['controller' => 'Payments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Payment'), ['controller' => 'Payments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Reviews'), ['controller' => 'Reviews', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Review'), ['controller' => 'Reviews', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Suggested Icons'), ['controller' => 'SuggestedIcons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Suggested Icon'), ['controller' => 'SuggestedIcons', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Suggested Overall Icons'), ['controller' => 'SuggestedOverallIcons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Suggested Overall Icon'), ['controller' => 'SuggestedOverallIcons', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contractors index large-9 medium-8 columns content">
    <h3><?= __('Contractors') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('addressline_1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('addressline_2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('city') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('country_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('zip') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pri_contact_fn') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pri_contact_ln') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pri_contact_pn') ?></th>
                <th scope="col"><?= $this->Paginator->sort('is_safety_sensitive') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('registration_status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('payment_status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('is_locked') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('latitude') ?></th>
                <th scope="col"><?= $this->Paginator->sort('longitude') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tnc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('waiting_on') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_tin') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pri_contact_title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_logo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('canqualify_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subscription_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('customer_representative_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('send_invoice') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contractors as $contractor): ?>
            <tr>
                <td><?= $this->Number->format($contractor->id) ?></td>
                <td><?= h($contractor->company_name) ?></td>
                <td><?= h($contractor->addressline_1) ?></td>
                <td><?= h($contractor->addressline_2) ?></td>
                <td><?= h($contractor->city) ?></td>
                <td><?= $contractor->has('state') ? $this->Html->link($contractor->state->name, ['controller' => 'States', 'action' => 'view', $contractor->state->id]) : '' ?></td>
                <td><?= $contractor->has('country') ? $this->Html->link($contractor->country->name, ['controller' => 'Countries', 'action' => 'view', $contractor->country->id]) : '' ?></td>
                <td><?= h($contractor->zip) ?></td>
                <td><?= h($contractor->pri_contact_fn) ?></td>
                <td><?= h($contractor->pri_contact_ln) ?></td>
                <td><?= h($contractor->pri_contact_pn) ?></td>
                <td><?= h($contractor->is_safety_sensitive) ?></td>
                <td><?= $contractor->has('user') ? $this->Html->link($contractor->user->id, ['controller' => 'Users', 'action' => 'view', $contractor->user->id]) : '' ?></td>
                <td><?= $this->Number->format($contractor->registration_status) ?></td>
                <td><?= h($contractor->payment_status) ?></td>
                <td><?= h($contractor->is_locked) ?></td>
                <td><?= h($contractor->created) ?></td>
                <td><?= h($contractor->modified) ?></td>
                <td><?= $this->Number->format($contractor->latitude) ?></td>
                <td><?= $this->Number->format($contractor->longitude) ?></td>
                <td><?= h($contractor->tnc) ?></td>
                <td><?= h($contractor->waiting_on) ?></td>
                <td><?= h($contractor->company_tin) ?></td>
                <td><?= h($contractor->pri_contact_title) ?></td>
                <td><?= h($contractor->company_logo) ?></td>
                <td><?= h($contractor->canqualify_date) ?></td>
                <td><?= h($contractor->subscription_date) ?></td>
                <td><?= $contractor->has('customer_representative') ? $this->Html->link($contractor->customer_representative->id, ['controller' => 'CustomerRepresentative', 'action' => 'view', $contractor->customer_representative->id]) : '' ?></td>
                <td><?= h($contractor->send_invoice) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $contractor->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contractor->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contractor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contractor->id)]) ?>
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
