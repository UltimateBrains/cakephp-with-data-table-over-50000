<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contractor $contractor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Contractor'), ['action' => 'edit', $contractor->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contractor'), ['action' => 'delete', $contractor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contractor->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contractors'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contractor'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customer Representative'), ['controller' => 'CustomerRepresentative', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer Representative'), ['controller' => 'CustomerRepresentative', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Billing Details'), ['controller' => 'BillingDetails', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Billing Detail'), ['controller' => 'BillingDetails', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Requests'), ['controller' => 'ClientRequests', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Request'), ['controller' => 'ClientRequests', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contractor Answers'), ['controller' => 'ContractorAnswers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contractor Answer'), ['controller' => 'ContractorAnswers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contractor Contacts'), ['controller' => 'ContractorContacts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contractor Contact'), ['controller' => 'ContractorContacts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contractor Docs'), ['controller' => 'ContractorDocs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contractor Doc'), ['controller' => 'ContractorDocs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contractor Invoices'), ['controller' => 'ContractorInvoices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contractor Invoice'), ['controller' => 'ContractorInvoices', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contractor Services'), ['controller' => 'ContractorServices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contractor Service'), ['controller' => 'ContractorServices', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contractor Sites'), ['controller' => 'ContractorSites', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contractor Site'), ['controller' => 'ContractorSites', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contractor Tempsites'), ['controller' => 'ContractorTempsites', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contractor Tempsite'), ['controller' => 'ContractorTempsites', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contractor Users'), ['controller' => 'ContractorUsers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contractor User'), ['controller' => 'ContractorUsers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Documents'), ['controller' => 'Documents', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Document'), ['controller' => 'Documents', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Explanations'), ['controller' => 'Explanations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Explanation'), ['controller' => 'Explanations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Icons'), ['controller' => 'Icons', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Icon'), ['controller' => 'Icons', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Leads'), ['controller' => 'Leads', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lead'), ['controller' => 'Leads', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Notes'), ['controller' => 'Notes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Note'), ['controller' => 'Notes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Notes Old'), ['controller' => 'NotesOld', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Notes Old'), ['controller' => 'NotesOld', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Overall Icons'), ['controller' => 'OverallIcons', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Overall Icon'), ['controller' => 'OverallIcons', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Payments'), ['controller' => 'Payments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Payment'), ['controller' => 'Payments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Reviews'), ['controller' => 'Reviews', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Review'), ['controller' => 'Reviews', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Suggested Icons'), ['controller' => 'SuggestedIcons', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Suggested Icon'), ['controller' => 'SuggestedIcons', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Suggested Overall Icons'), ['controller' => 'SuggestedOverallIcons', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Suggested Overall Icon'), ['controller' => 'SuggestedOverallIcons', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contractors view large-9 medium-8 columns content">
    <h3><?= h($contractor->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Company Name') ?></th>
            <td><?= h($contractor->company_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Addressline 1') ?></th>
            <td><?= h($contractor->addressline_1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Addressline 2') ?></th>
            <td><?= h($contractor->addressline_2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($contractor->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= $contractor->has('state') ? $this->Html->link($contractor->state->name, ['controller' => 'States', 'action' => 'view', $contractor->state->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= $contractor->has('country') ? $this->Html->link($contractor->country->name, ['controller' => 'Countries', 'action' => 'view', $contractor->country->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zip') ?></th>
            <td><?= h($contractor->zip) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pri Contact Fn') ?></th>
            <td><?= h($contractor->pri_contact_fn) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pri Contact Ln') ?></th>
            <td><?= h($contractor->pri_contact_ln) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pri Contact Pn') ?></th>
            <td><?= h($contractor->pri_contact_pn) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $contractor->has('user') ? $this->Html->link($contractor->user->id, ['controller' => 'Users', 'action' => 'view', $contractor->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Waiting On') ?></th>
            <td><?= h($contractor->waiting_on) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company Tin') ?></th>
            <td><?= h($contractor->company_tin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pri Contact Title') ?></th>
            <td><?= h($contractor->pri_contact_title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company Logo') ?></th>
            <td><?= h($contractor->company_logo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Customer Representative') ?></th>
            <td><?= $contractor->has('customer_representative') ? $this->Html->link($contractor->customer_representative->id, ['controller' => 'CustomerRepresentative', 'action' => 'view', $contractor->customer_representative->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($contractor->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Registration Status') ?></th>
            <td><?= $this->Number->format($contractor->registration_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Latitude') ?></th>
            <td><?= $this->Number->format($contractor->latitude) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Longitude') ?></th>
            <td><?= $this->Number->format($contractor->longitude) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($contractor->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($contractor->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Canqualify Date') ?></th>
            <td><?= h($contractor->canqualify_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subscription Date') ?></th>
            <td><?= h($contractor->subscription_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Safety Sensitive') ?></th>
            <td><?= $contractor->is_safety_sensitive ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payment Status') ?></th>
            <td><?= $contractor->payment_status ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Locked') ?></th>
            <td><?= $contractor->is_locked ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tnc') ?></th>
            <td><?= $contractor->tnc ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Send Invoice') ?></th>
            <td><?= $contractor->send_invoice ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Billing Details') ?></h4>
        <?php if (!empty($contractor->billing_details)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('First Name') ?></th>
                <th scope="col"><?= __('Last Name') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Billing Address') ?></th>
                <th scope="col"><?= __('State Id') ?></th>
                <th scope="col"><?= __('Country Id') ?></th>
                <th scope="col"><?= __('Card Details') ?></th>
                <th scope="col"><?= __('Created By') ?></th>
                <th scope="col"><?= __('Created On') ?></th>
                <th scope="col"><?= __('Updated By') ?></th>
                <th scope="col"><?= __('Updated On') ?></th>
                <th scope="col"><?= __('Deleted By') ?></th>
                <th scope="col"><?= __('Deleted On') ?></th>
                <th scope="col"><?= __('Contractor Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($contractor->billing_details as $billingDetails): ?>
            <tr>
                <td><?= h($billingDetails->id) ?></td>
                <td><?= h($billingDetails->first_name) ?></td>
                <td><?= h($billingDetails->last_name) ?></td>
                <td><?= h($billingDetails->email) ?></td>
                <td><?= h($billingDetails->billing_address) ?></td>
                <td><?= h($billingDetails->state_id) ?></td>
                <td><?= h($billingDetails->country_id) ?></td>
                <td><?= h($billingDetails->card_details) ?></td>
                <td><?= h($billingDetails->created_by) ?></td>
                <td><?= h($billingDetails->created_on) ?></td>
                <td><?= h($billingDetails->updated_by) ?></td>
                <td><?= h($billingDetails->updated_on) ?></td>
                <td><?= h($billingDetails->deleted_by) ?></td>
                <td><?= h($billingDetails->deleted_on) ?></td>
                <td><?= h($billingDetails->contractor_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'BillingDetails', 'action' => 'view', $billingDetails->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'BillingDetails', 'action' => 'edit', $billingDetails->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'BillingDetails', 'action' => 'delete', $billingDetails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $billingDetails->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Client Requests') ?></h4>
        <?php if (!empty($contractor->client_requests)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col"><?= __('Contractor Id') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Created By') ?></th>
                <th scope="col"><?= __('Modified By') ?></th>
                <th scope="col"><?= __('Subject') ?></th>
                <th scope="col"><?= __('Message') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($contractor->client_requests as $clientRequests): ?>
            <tr>
                <td><?= h($clientRequests->id) ?></td>
                <td><?= h($clientRequests->client_id) ?></td>
                <td><?= h($clientRequests->contractor_id) ?></td>
                <td><?= h($clientRequests->status) ?></td>
                <td><?= h($clientRequests->created) ?></td>
                <td><?= h($clientRequests->modified) ?></td>
                <td><?= h($clientRequests->created_by) ?></td>
                <td><?= h($clientRequests->modified_by) ?></td>
                <td><?= h($clientRequests->subject) ?></td>
                <td><?= h($clientRequests->message) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ClientRequests', 'action' => 'view', $clientRequests->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ClientRequests', 'action' => 'edit', $clientRequests->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ClientRequests', 'action' => 'delete', $clientRequests->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientRequests->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Contractor Answers') ?></h4>
        <?php if (!empty($contractor->contractor_answers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Contractor Id') ?></th>
                <th scope="col"><?= __('Question Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Created By') ?></th>
                <th scope="col"><?= __('Modified By') ?></th>
                <th scope="col"><?= __('Answer') ?></th>
                <th scope="col"><?= __('Year') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($contractor->contractor_answers as $contractorAnswers): ?>
            <tr>
                <td><?= h($contractorAnswers->id) ?></td>
                <td><?= h($contractorAnswers->contractor_id) ?></td>
                <td><?= h($contractorAnswers->question_id) ?></td>
                <td><?= h($contractorAnswers->created) ?></td>
                <td><?= h($contractorAnswers->modified) ?></td>
                <td><?= h($contractorAnswers->created_by) ?></td>
                <td><?= h($contractorAnswers->modified_by) ?></td>
                <td><?= h($contractorAnswers->answer) ?></td>
                <td><?= h($contractorAnswers->year) ?></td>
                <td><?= h($contractorAnswers->client_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ContractorAnswers', 'action' => 'view', $contractorAnswers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ContractorAnswers', 'action' => 'edit', $contractorAnswers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ContractorAnswers', 'action' => 'delete', $contractorAnswers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contractorAnswers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Contractor Contacts') ?></h4>
        <?php if (!empty($contractor->contractor_contacts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Fname') ?></th>
                <th scope="col"><?= __('Lname') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Phone No') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Created By') ?></th>
                <th scope="col"><?= __('Modified By') ?></th>
                <th scope="col"><?= __('Contractor Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($contractor->contractor_contacts as $contractorContacts): ?>
            <tr>
                <td><?= h($contractorContacts->id) ?></td>
                <td><?= h($contractorContacts->fname) ?></td>
                <td><?= h($contractorContacts->lname) ?></td>
                <td><?= h($contractorContacts->email) ?></td>
                <td><?= h($contractorContacts->phone_no) ?></td>
                <td><?= h($contractorContacts->created) ?></td>
                <td><?= h($contractorContacts->modified) ?></td>
                <td><?= h($contractorContacts->created_by) ?></td>
                <td><?= h($contractorContacts->modified_by) ?></td>
                <td><?= h($contractorContacts->contractor_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ContractorContacts', 'action' => 'view', $contractorContacts->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ContractorContacts', 'action' => 'edit', $contractorContacts->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ContractorContacts', 'action' => 'delete', $contractorContacts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contractorContacts->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Contractor Docs') ?></h4>
        <?php if (!empty($contractor->contractor_docs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Document') ?></th>
                <th scope="col"><?= __('Fndocs Id') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col"><?= __('Contractor Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Created By') ?></th>
                <th scope="col"><?= __('Modified By') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($contractor->contractor_docs as $contractorDocs): ?>
            <tr>
                <td><?= h($contractorDocs->id) ?></td>
                <td><?= h($contractorDocs->document) ?></td>
                <td><?= h($contractorDocs->fndocs_id) ?></td>
                <td><?= h($contractorDocs->client_id) ?></td>
                <td><?= h($contractorDocs->contractor_id) ?></td>
                <td><?= h($contractorDocs->created) ?></td>
                <td><?= h($contractorDocs->modified) ?></td>
                <td><?= h($contractorDocs->created_by) ?></td>
                <td><?= h($contractorDocs->modified_by) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ContractorDocs', 'action' => 'view', $contractorDocs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ContractorDocs', 'action' => 'edit', $contractorDocs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ContractorDocs', 'action' => 'delete', $contractorDocs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contractorDocs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Contractor Invoices') ?></h4>
        <?php if (!empty($contractor->contractor_invoices)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Contractor Id') ?></th>
                <th scope="col"><?= __('Service Id') ?></th>
                <th scope="col"><?= __('Payment Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Service Price') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($contractor->contractor_invoices as $contractorInvoices): ?>
            <tr>
                <td><?= h($contractorInvoices->id) ?></td>
                <td><?= h($contractorInvoices->contractor_id) ?></td>
                <td><?= h($contractorInvoices->service_id) ?></td>
                <td><?= h($contractorInvoices->payment_id) ?></td>
                <td><?= h($contractorInvoices->created) ?></td>
                <td><?= h($contractorInvoices->modified) ?></td>
                <td><?= h($contractorInvoices->service_price) ?></td>
                <td><?= h($contractorInvoices->client_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ContractorInvoices', 'action' => 'view', $contractorInvoices->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ContractorInvoices', 'action' => 'edit', $contractorInvoices->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ContractorInvoices', 'action' => 'delete', $contractorInvoices->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contractorInvoices->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Contractor Services') ?></h4>
        <?php if (!empty($contractor->contractor_services)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Contractor Id') ?></th>
                <th scope="col"><?= __('Service Id') ?></th>
                <th scope="col"><?= __('Client Ids') ?></th>
                <th scope="col"><?= __('Created By') ?></th>
                <th scope="col"><?= __('Modified By') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($contractor->contractor_services as $contractorServices): ?>
            <tr>
                <td><?= h($contractorServices->id) ?></td>
                <td><?= h($contractorServices->contractor_id) ?></td>
                <td><?= h($contractorServices->service_id) ?></td>
                <td><?= h($contractorServices->client_ids) ?></td>
                <td><?= h($contractorServices->created_by) ?></td>
                <td><?= h($contractorServices->modified_by) ?></td>
                <td><?= h($contractorServices->created) ?></td>
                <td><?= h($contractorServices->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ContractorServices', 'action' => 'view', $contractorServices->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ContractorServices', 'action' => 'edit', $contractorServices->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ContractorServices', 'action' => 'delete', $contractorServices->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contractorServices->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Contractor Sites') ?></h4>
        <?php if (!empty($contractor->contractor_sites)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Contractor Id') ?></th>
                <th scope="col"><?= __('Site Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Created By') ?></th>
                <th scope="col"><?= __('Modified By') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($contractor->contractor_sites as $contractorSites): ?>
            <tr>
                <td><?= h($contractorSites->id) ?></td>
                <td><?= h($contractorSites->contractor_id) ?></td>
                <td><?= h($contractorSites->site_id) ?></td>
                <td><?= h($contractorSites->created) ?></td>
                <td><?= h($contractorSites->modified) ?></td>
                <td><?= h($contractorSites->created_by) ?></td>
                <td><?= h($contractorSites->modified_by) ?></td>
                <td><?= h($contractorSites->client_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ContractorSites', 'action' => 'view', $contractorSites->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ContractorSites', 'action' => 'edit', $contractorSites->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ContractorSites', 'action' => 'delete', $contractorSites->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contractorSites->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Contractor Tempsites') ?></h4>
        <?php if (!empty($contractor->contractor_tempsites)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Contractor Id') ?></th>
                <th scope="col"><?= __('Site Id') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Created By') ?></th>
                <th scope="col"><?= __('Modified By') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($contractor->contractor_tempsites as $contractorTempsites): ?>
            <tr>
                <td><?= h($contractorTempsites->id) ?></td>
                <td><?= h($contractorTempsites->contractor_id) ?></td>
                <td><?= h($contractorTempsites->site_id) ?></td>
                <td><?= h($contractorTempsites->client_id) ?></td>
                <td><?= h($contractorTempsites->created) ?></td>
                <td><?= h($contractorTempsites->modified) ?></td>
                <td><?= h($contractorTempsites->created_by) ?></td>
                <td><?= h($contractorTempsites->modified_by) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ContractorTempsites', 'action' => 'view', $contractorTempsites->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ContractorTempsites', 'action' => 'edit', $contractorTempsites->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ContractorTempsites', 'action' => 'delete', $contractorTempsites->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contractorTempsites->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Contractor Users') ?></h4>
        <?php if (!empty($contractor->contractor_users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Pri Contact Fn') ?></th>
                <th scope="col"><?= __('Pri Contact Ln') ?></th>
                <th scope="col"><?= __('Pri Contact Pn') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Contractor Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($contractor->contractor_users as $contractorUsers): ?>
            <tr>
                <td><?= h($contractorUsers->id) ?></td>
                <td><?= h($contractorUsers->pri_contact_fn) ?></td>
                <td><?= h($contractorUsers->pri_contact_ln) ?></td>
                <td><?= h($contractorUsers->pri_contact_pn) ?></td>
                <td><?= h($contractorUsers->user_id) ?></td>
                <td><?= h($contractorUsers->contractor_id) ?></td>
                <td><?= h($contractorUsers->created) ?></td>
                <td><?= h($contractorUsers->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ContractorUsers', 'action' => 'view', $contractorUsers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ContractorUsers', 'action' => 'edit', $contractorUsers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ContractorUsers', 'action' => 'delete', $contractorUsers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contractorUsers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Documents') ?></h4>
        <?php if (!empty($contractor->documents)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Document') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col"><?= __('Contractor Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Created By') ?></th>
                <th scope="col"><?= __('Modified By') ?></th>
                <th scope="col"><?= __('Doc Version') ?></th>
                <th scope="col"><?= __('Document Id') ?></th>
                <th scope="col"><?= __('Signed') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($contractor->documents as $documents): ?>
            <tr>
                <td><?= h($documents->id) ?></td>
                <td><?= h($documents->name) ?></td>
                <td><?= h($documents->document) ?></td>
                <td><?= h($documents->client_id) ?></td>
                <td><?= h($documents->contractor_id) ?></td>
                <td><?= h($documents->created) ?></td>
                <td><?= h($documents->modified) ?></td>
                <td><?= h($documents->created_by) ?></td>
                <td><?= h($documents->modified_by) ?></td>
                <td><?= h($documents->doc_version) ?></td>
                <td><?= h($documents->document_id) ?></td>
                <td><?= h($documents->signed) ?></td>
                <td><?= h($documents->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Documents', 'action' => 'view', $documents->]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Documents', 'action' => 'edit', $documents->]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Documents', 'action' => 'delete', $documents->], ['confirm' => __('Are you sure you want to delete # {0}?', $documents->)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Employees') ?></h4>
        <?php if (!empty($contractor->employees)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Addressline 1') ?></th>
                <th scope="col"><?= __('Addressline 2') ?></th>
                <th scope="col"><?= __('City') ?></th>
                <th scope="col"><?= __('State Id') ?></th>
                <th scope="col"><?= __('Country Id') ?></th>
                <th scope="col"><?= __('Zip') ?></th>
                <th scope="col"><?= __('Pri Contact Fn') ?></th>
                <th scope="col"><?= __('Pri Contact Ln') ?></th>
                <th scope="col"><?= __('Pri Contact Pn') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Created By') ?></th>
                <th scope="col"><?= __('Modified By') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Contractor Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($contractor->employees as $employees): ?>
            <tr>
                <td><?= h($employees->id) ?></td>
                <td><?= h($employees->addressline_1) ?></td>
                <td><?= h($employees->addressline_2) ?></td>
                <td><?= h($employees->city) ?></td>
                <td><?= h($employees->state_id) ?></td>
                <td><?= h($employees->country_id) ?></td>
                <td><?= h($employees->zip) ?></td>
                <td><?= h($employees->pri_contact_fn) ?></td>
                <td><?= h($employees->pri_contact_ln) ?></td>
                <td><?= h($employees->pri_contact_pn) ?></td>
                <td><?= h($employees->created) ?></td>
                <td><?= h($employees->modified) ?></td>
                <td><?= h($employees->created_by) ?></td>
                <td><?= h($employees->modified_by) ?></td>
                <td><?= h($employees->user_id) ?></td>
                <td><?= h($employees->contractor_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Employees', 'action' => 'view', $employees->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Employees', 'action' => 'edit', $employees->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Employees', 'action' => 'delete', $employees->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employees->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Explanations') ?></h4>
        <?php if (!empty($contractor->explanations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Document') ?></th>
                <th scope="col"><?= __('Contractor Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Created By') ?></th>
                <th scope="col"><?= __('Modified By') ?></th>
                <th scope="col"><?= __('Show To Client') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($contractor->explanations as $explanations): ?>
            <tr>
                <td><?= h($explanations->id) ?></td>
                <td><?= h($explanations->name) ?></td>
                <td><?= h($explanations->document) ?></td>
                <td><?= h($explanations->contractor_id) ?></td>
                <td><?= h($explanations->created) ?></td>
                <td><?= h($explanations->modified) ?></td>
                <td><?= h($explanations->created_by) ?></td>
                <td><?= h($explanations->modified_by) ?></td>
                <td><?= h($explanations->show_to_client) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Explanations', 'action' => 'view', $explanations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Explanations', 'action' => 'edit', $explanations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Explanations', 'action' => 'delete', $explanations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $explanations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Icons') ?></h4>
        <?php if (!empty($contractor->icons)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col"><?= __('Contractor Id') ?></th>
                <th scope="col"><?= __('Bench Type') ?></th>
                <th scope="col"><?= __('Icon') ?></th>
                <th scope="col"><?= __('Category') ?></th>
                <th scope="col"><?= __('Created By') ?></th>
                <th scope="col"><?= __('Modified By') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Is Forced') ?></th>
                <th scope="col"><?= __('Documents') ?></th>
                <th scope="col"><?= __('Notes') ?></th>
                <th scope="col"><?= __('Show To Contractor') ?></th>
                <th scope="col"><?= __('Show To Clients') ?></th>
                <th scope="col"><?= __('Overall Icon Id') ?></th>
                <th scope="col"><?= __('Icon From') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($contractor->icons as $icons): ?>
            <tr>
                <td><?= h($icons->id) ?></td>
                <td><?= h($icons->client_id) ?></td>
                <td><?= h($icons->contractor_id) ?></td>
                <td><?= h($icons->bench_type) ?></td>
                <td><?= h($icons->icon) ?></td>
                <td><?= h($icons->category) ?></td>
                <td><?= h($icons->created_by) ?></td>
                <td><?= h($icons->modified_by) ?></td>
                <td><?= h($icons->created) ?></td>
                <td><?= h($icons->modified) ?></td>
                <td><?= h($icons->is_forced) ?></td>
                <td><?= h($icons->documents) ?></td>
                <td><?= h($icons->notes) ?></td>
                <td><?= h($icons->show_to_contractor) ?></td>
                <td><?= h($icons->show_to_clients) ?></td>
                <td><?= h($icons->overall_icon_id) ?></td>
                <td><?= h($icons->icon_from) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Icons', 'action' => 'view', $icons->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Icons', 'action' => 'edit', $icons->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Icons', 'action' => 'delete', $icons->id], ['confirm' => __('Are you sure you want to delete # {0}?', $icons->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Leads') ?></h4>
        <?php if (!empty($contractor->leads)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Company Name') ?></th>
                <th scope="col"><?= __('Contact Name First') ?></th>
                <th scope="col"><?= __('Contact Name Last') ?></th>
                <th scope="col"><?= __('Phone No') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('City') ?></th>
                <th scope="col"><?= __('State') ?></th>
                <th scope="col"><?= __('Zip Code') ?></th>
                <th scope="col"><?= __('Description Of Work') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Created By') ?></th>
                <th scope="col"><?= __('Modified By') ?></th>
                <th scope="col"><?= __('Contractor Id') ?></th>
                <th scope="col"><?= __('Lead Status Id') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($contractor->leads as $leads): ?>
            <tr>
                <td><?= h($leads->id) ?></td>
                <td><?= h($leads->company_name) ?></td>
                <td><?= h($leads->contact_name_first) ?></td>
                <td><?= h($leads->contact_name_last) ?></td>
                <td><?= h($leads->phone_no) ?></td>
                <td><?= h($leads->email) ?></td>
                <td><?= h($leads->city) ?></td>
                <td><?= h($leads->state) ?></td>
                <td><?= h($leads->zip_code) ?></td>
                <td><?= h($leads->description_of_work) ?></td>
                <td><?= h($leads->client_id) ?></td>
                <td><?= h($leads->created) ?></td>
                <td><?= h($leads->modified) ?></td>
                <td><?= h($leads->created_by) ?></td>
                <td><?= h($leads->modified_by) ?></td>
                <td><?= h($leads->contractor_id) ?></td>
                <td><?= h($leads->lead_status_id) ?></td>
                <td><?= h($leads->address) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Leads', 'action' => 'view', $leads->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Leads', 'action' => 'edit', $leads->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Leads', 'action' => 'delete', $leads->id], ['confirm' => __('Are you sure you want to delete # {0}?', $leads->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Notes') ?></h4>
        <?php if (!empty($contractor->notes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Subject') ?></th>
                <th scope="col"><?= __('Notes') ?></th>
                <th scope="col"><?= __('Contractor Id') ?></th>
                <th scope="col"><?= __('Show To Contractor') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Created By') ?></th>
                <th scope="col"><?= __('Modified By') ?></th>
                <th scope="col"><?= __('Is Read') ?></th>
                <th scope="col"><?= __('Customer Representative Id') ?></th>
                <th scope="col"><?= __('Follow Up') ?></th>
                <th scope="col"><?= __('Feature Date') ?></th>
                <th scope="col"><?= __('Show To Client') ?></th>
                <th scope="col"><?= __('Client Ids') ?></th>
                <th scope="col"><?= __('Role Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($contractor->notes as $notes): ?>
            <tr>
                <td><?= h($notes->id) ?></td>
                <td><?= h($notes->subject) ?></td>
                <td><?= h($notes->notes) ?></td>
                <td><?= h($notes->contractor_id) ?></td>
                <td><?= h($notes->show_to_contractor) ?></td>
                <td><?= h($notes->created) ?></td>
                <td><?= h($notes->modified) ?></td>
                <td><?= h($notes->created_by) ?></td>
                <td><?= h($notes->modified_by) ?></td>
                <td><?= h($notes->is_read) ?></td>
                <td><?= h($notes->customer_representative_id) ?></td>
                <td><?= h($notes->follow_up) ?></td>
                <td><?= h($notes->feature_date) ?></td>
                <td><?= h($notes->show_to_client) ?></td>
                <td><?= h($notes->client_ids) ?></td>
                <td><?= h($notes->role_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Notes', 'action' => 'view', $notes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Notes', 'action' => 'edit', $notes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Notes', 'action' => 'delete', $notes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $notes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Notes Old') ?></h4>
        <?php if (!empty($contractor->notes_old)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Subject') ?></th>
                <th scope="col"><?= __('Notes') ?></th>
                <th scope="col"><?= __('Contractor Id') ?></th>
                <th scope="col"><?= __('Client Ids') ?></th>
                <th scope="col"><?= __('Show To Contractor') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Created By') ?></th>
                <th scope="col"><?= __('Modified By') ?></th>
                <th scope="col"><?= __('Is Read') ?></th>
                <th scope="col"><?= __('Show To Client') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($contractor->notes_old as $notesOld): ?>
            <tr>
                <td><?= h($notesOld->id) ?></td>
                <td><?= h($notesOld->subject) ?></td>
                <td><?= h($notesOld->notes) ?></td>
                <td><?= h($notesOld->contractor_id) ?></td>
                <td><?= h($notesOld->client_ids) ?></td>
                <td><?= h($notesOld->show_to_contractor) ?></td>
                <td><?= h($notesOld->created) ?></td>
                <td><?= h($notesOld->modified) ?></td>
                <td><?= h($notesOld->created_by) ?></td>
                <td><?= h($notesOld->modified_by) ?></td>
                <td><?= h($notesOld->is_read) ?></td>
                <td><?= h($notesOld->show_to_client) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'NotesOld', 'action' => 'view', $notesOld->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'NotesOld', 'action' => 'edit', $notesOld->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'NotesOld', 'action' => 'delete', $notesOld->id], ['confirm' => __('Are you sure you want to delete # {0}?', $notesOld->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Overall Icons') ?></h4>
        <?php if (!empty($contractor->overall_icons)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col"><?= __('Contractor Id') ?></th>
                <th scope="col"><?= __('Bench Type') ?></th>
                <th scope="col"><?= __('Icon') ?></th>
                <th scope="col"><?= __('Category') ?></th>
                <th scope="col"><?= __('Created By') ?></th>
                <th scope="col"><?= __('Modified By') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Is Forced') ?></th>
                <th scope="col"><?= __('Documents') ?></th>
                <th scope="col"><?= __('Notes') ?></th>
                <th scope="col"><?= __('Show To Contractor') ?></th>
                <th scope="col"><?= __('Show To Clients') ?></th>
                <th scope="col"><?= __('Icon From') ?></th>
                <th scope="col"><?= __('Review') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($contractor->overall_icons as $overallIcons): ?>
            <tr>
                <td><?= h($overallIcons->id) ?></td>
                <td><?= h($overallIcons->client_id) ?></td>
                <td><?= h($overallIcons->contractor_id) ?></td>
                <td><?= h($overallIcons->bench_type) ?></td>
                <td><?= h($overallIcons->icon) ?></td>
                <td><?= h($overallIcons->category) ?></td>
                <td><?= h($overallIcons->created_by) ?></td>
                <td><?= h($overallIcons->modified_by) ?></td>
                <td><?= h($overallIcons->created) ?></td>
                <td><?= h($overallIcons->modified) ?></td>
                <td><?= h($overallIcons->is_forced) ?></td>
                <td><?= h($overallIcons->documents) ?></td>
                <td><?= h($overallIcons->notes) ?></td>
                <td><?= h($overallIcons->show_to_contractor) ?></td>
                <td><?= h($overallIcons->show_to_clients) ?></td>
                <td><?= h($overallIcons->icon_from) ?></td>
                <td><?= h($overallIcons->review) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'OverallIcons', 'action' => 'view', $overallIcons->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'OverallIcons', 'action' => 'edit', $overallIcons->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'OverallIcons', 'action' => 'delete', $overallIcons->id], ['confirm' => __('Are you sure you want to delete # {0}?', $overallIcons->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Payments') ?></h4>
        <?php if (!empty($contractor->payments)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Response') ?></th>
                <th scope="col"><?= __('Contractor Id') ?></th>
                <th scope="col"><?= __('Totalprice') ?></th>
                <th scope="col"><?= __('Secret Link') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Created By') ?></th>
                <th scope="col"><?= __('Modified By') ?></th>
                <th scope="col"><?= __('P Ack') ?></th>
                <th scope="col"><?= __('P Timestamp') ?></th>
                <th scope="col"><?= __('P Correlationid') ?></th>
                <th scope="col"><?= __('P Version') ?></th>
                <th scope="col"><?= __('P Build') ?></th>
                <th scope="col"><?= __('P Amt') ?></th>
                <th scope="col"><?= __('P Currencycode') ?></th>
                <th scope="col"><?= __('P Errorcode0') ?></th>
                <th scope="col"><?= __('P Shortmessage0') ?></th>
                <th scope="col"><?= __('P Longmessage0') ?></th>
                <th scope="col"><?= __('P Serveritycode0') ?></th>
                <th scope="col"><?= __('P Avscode') ?></th>
                <th scope="col"><?= __('P Cvv2match') ?></th>
                <th scope="col"><?= __('P Transactionid') ?></th>
                <th scope="col"><?= __('Subscription Date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($contractor->payments as $payments): ?>
            <tr>
                <td><?= h($payments->id) ?></td>
                <td><?= h($payments->response) ?></td>
                <td><?= h($payments->contractor_id) ?></td>
                <td><?= h($payments->totalprice) ?></td>
                <td><?= h($payments->secret_link) ?></td>
                <td><?= h($payments->created) ?></td>
                <td><?= h($payments->modified) ?></td>
                <td><?= h($payments->created_by) ?></td>
                <td><?= h($payments->modified_by) ?></td>
                <td><?= h($payments->p_ack) ?></td>
                <td><?= h($payments->p_timestamp) ?></td>
                <td><?= h($payments->p_correlationid) ?></td>
                <td><?= h($payments->p_version) ?></td>
                <td><?= h($payments->p_build) ?></td>
                <td><?= h($payments->p_amt) ?></td>
                <td><?= h($payments->p_currencycode) ?></td>
                <td><?= h($payments->p_errorcode0) ?></td>
                <td><?= h($payments->p_shortmessage0) ?></td>
                <td><?= h($payments->p_longmessage0) ?></td>
                <td><?= h($payments->p_serveritycode0) ?></td>
                <td><?= h($payments->p_avscode) ?></td>
                <td><?= h($payments->p_cvv2match) ?></td>
                <td><?= h($payments->p_transactionid) ?></td>
                <td><?= h($payments->subscription_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Payments', 'action' => 'view', $payments->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Payments', 'action' => 'edit', $payments->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Payments', 'action' => 'delete', $payments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $payments->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Reviews') ?></h4>
        <?php if (!empty($contractor->reviews)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Reviewtxt') ?></th>
                <th scope="col"><?= __('Rating') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col"><?= __('Contractor Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Created By') ?></th>
                <th scope="col"><?= __('Modified By') ?></th>
                <th scope="col"><?= __('Doc 1') ?></th>
                <th scope="col"><?= __('Doc 2') ?></th>
                <th scope="col"><?= __('Doc 3') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($contractor->reviews as $reviews): ?>
            <tr>
                <td><?= h($reviews->id) ?></td>
                <td><?= h($reviews->reviewtxt) ?></td>
                <td><?= h($reviews->rating) ?></td>
                <td><?= h($reviews->client_id) ?></td>
                <td><?= h($reviews->contractor_id) ?></td>
                <td><?= h($reviews->created) ?></td>
                <td><?= h($reviews->modified) ?></td>
                <td><?= h($reviews->created_by) ?></td>
                <td><?= h($reviews->modified_by) ?></td>
                <td><?= h($reviews->doc_1) ?></td>
                <td><?= h($reviews->doc_2) ?></td>
                <td><?= h($reviews->doc_3) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Reviews', 'action' => 'view', $reviews->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Reviews', 'action' => 'edit', $reviews->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Reviews', 'action' => 'delete', $reviews->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reviews->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Suggested Icons') ?></h4>
        <?php if (!empty($contractor->suggested_icons)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col"><?= __('Contractor Id') ?></th>
                <th scope="col"><?= __('Bench Type') ?></th>
                <th scope="col"><?= __('Icon') ?></th>
                <th scope="col"><?= __('Category') ?></th>
                <th scope="col"><?= __('Created By') ?></th>
                <th scope="col"><?= __('Modified By') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Is Forced') ?></th>
                <th scope="col"><?= __('Documents') ?></th>
                <th scope="col"><?= __('Notes') ?></th>
                <th scope="col"><?= __('Show To Contractor') ?></th>
                <th scope="col"><?= __('Show To Clients') ?></th>
                <th scope="col"><?= __('Suggested Overall Icon Id') ?></th>
                <th scope="col"><?= __('Icon From') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($contractor->suggested_icons as $suggestedIcons): ?>
            <tr>
                <td><?= h($suggestedIcons->id) ?></td>
                <td><?= h($suggestedIcons->client_id) ?></td>
                <td><?= h($suggestedIcons->contractor_id) ?></td>
                <td><?= h($suggestedIcons->bench_type) ?></td>
                <td><?= h($suggestedIcons->icon) ?></td>
                <td><?= h($suggestedIcons->category) ?></td>
                <td><?= h($suggestedIcons->created_by) ?></td>
                <td><?= h($suggestedIcons->modified_by) ?></td>
                <td><?= h($suggestedIcons->created) ?></td>
                <td><?= h($suggestedIcons->modified) ?></td>
                <td><?= h($suggestedIcons->is_forced) ?></td>
                <td><?= h($suggestedIcons->documents) ?></td>
                <td><?= h($suggestedIcons->notes) ?></td>
                <td><?= h($suggestedIcons->show_to_contractor) ?></td>
                <td><?= h($suggestedIcons->show_to_clients) ?></td>
                <td><?= h($suggestedIcons->suggested_overall_icon_id) ?></td>
                <td><?= h($suggestedIcons->icon_from) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SuggestedIcons', 'action' => 'view', $suggestedIcons->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SuggestedIcons', 'action' => 'edit', $suggestedIcons->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SuggestedIcons', 'action' => 'delete', $suggestedIcons->id], ['confirm' => __('Are you sure you want to delete # {0}?', $suggestedIcons->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Suggested Overall Icons') ?></h4>
        <?php if (!empty($contractor->suggested_overall_icons)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col"><?= __('Contractor Id') ?></th>
                <th scope="col"><?= __('Bench Type') ?></th>
                <th scope="col"><?= __('Icon') ?></th>
                <th scope="col"><?= __('Category') ?></th>
                <th scope="col"><?= __('Created By') ?></th>
                <th scope="col"><?= __('Modified By') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Is Forced') ?></th>
                <th scope="col"><?= __('Documents') ?></th>
                <th scope="col"><?= __('Notes') ?></th>
                <th scope="col"><?= __('Show To Contractor') ?></th>
                <th scope="col"><?= __('Show To Clients') ?></th>
                <th scope="col"><?= __('Icon From') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($contractor->suggested_overall_icons as $suggestedOverallIcons): ?>
            <tr>
                <td><?= h($suggestedOverallIcons->id) ?></td>
                <td><?= h($suggestedOverallIcons->client_id) ?></td>
                <td><?= h($suggestedOverallIcons->contractor_id) ?></td>
                <td><?= h($suggestedOverallIcons->bench_type) ?></td>
                <td><?= h($suggestedOverallIcons->icon) ?></td>
                <td><?= h($suggestedOverallIcons->category) ?></td>
                <td><?= h($suggestedOverallIcons->created_by) ?></td>
                <td><?= h($suggestedOverallIcons->modified_by) ?></td>
                <td><?= h($suggestedOverallIcons->created) ?></td>
                <td><?= h($suggestedOverallIcons->modified) ?></td>
                <td><?= h($suggestedOverallIcons->is_forced) ?></td>
                <td><?= h($suggestedOverallIcons->documents) ?></td>
                <td><?= h($suggestedOverallIcons->notes) ?></td>
                <td><?= h($suggestedOverallIcons->show_to_contractor) ?></td>
                <td><?= h($suggestedOverallIcons->show_to_clients) ?></td>
                <td><?= h($suggestedOverallIcons->icon_from) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SuggestedOverallIcons', 'action' => 'view', $suggestedOverallIcons->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SuggestedOverallIcons', 'action' => 'edit', $suggestedOverallIcons->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SuggestedOverallIcons', 'action' => 'delete', $suggestedOverallIcons->id], ['confirm' => __('Are you sure you want to delete # {0}?', $suggestedOverallIcons->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
