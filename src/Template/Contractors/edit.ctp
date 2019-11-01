<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contractor $contractor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $contractor->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $contractor->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Contractors'), ['action' => 'index']) ?></li>
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
<div class="contractors form large-9 medium-8 columns content">
    <?= $this->Form->create($contractor) ?>
    <fieldset>
        <legend><?= __('Edit Contractor') ?></legend>
        <?php
            echo $this->Form->control('company_name');
            echo $this->Form->control('addressline_1');
            echo $this->Form->control('addressline_2');
            echo $this->Form->control('city');
            echo $this->Form->control('state_id', ['options' => $states, 'empty' => true]);
            echo $this->Form->control('country_id', ['options' => $countries, 'empty' => true]);
            echo $this->Form->control('zip');
            echo $this->Form->control('pri_contact_fn');
            echo $this->Form->control('pri_contact_ln');
            echo $this->Form->control('pri_contact_pn');
            echo $this->Form->control('is_safety_sensitive');
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('registration_status');
            echo $this->Form->control('payment_status');
            echo $this->Form->control('is_locked');
            echo $this->Form->control('latitude');
            echo $this->Form->control('longitude');
            echo $this->Form->control('tnc');
            echo $this->Form->control('waiting_on');
            echo $this->Form->control('company_tin');
            echo $this->Form->control('pri_contact_title');
            echo $this->Form->control('company_logo');
            echo $this->Form->control('canqualify_date');
            echo $this->Form->control('subscription_date', ['empty' => true]);
            echo $this->Form->control('customer_representative_id', ['options' => $customerRepresentative, 'empty' => true]);
            echo $this->Form->control('send_invoice');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
