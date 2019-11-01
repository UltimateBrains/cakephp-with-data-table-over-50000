<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contractor Entity
 *
 * @property int $id
 * @property string|null $company_name
 * @property string|null $addressline_1
 * @property string|null $addressline_2
 * @property string|null $city
 * @property int|null $state_id
 * @property int|null $country_id
 * @property string|null $zip
 * @property string|null $pri_contact_fn
 * @property string|null $pri_contact_ln
 * @property string|null $pri_contact_pn
 * @property bool|null $is_safety_sensitive
 * @property int|null $user_id
 * @property int|null $registration_status
 * @property bool|null $payment_status
 * @property bool|null $is_locked
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property float|null $latitude
 * @property float|null $longitude
 * @property bool $tnc
 * @property string|null $waiting_on
 * @property string|null $company_tin
 * @property string|null $pri_contact_title
 * @property string|null $company_logo
 * @property \Cake\I18n\FrozenTime|null $canqualify_date
 * @property \Cake\I18n\FrozenDate|null $subscription_date
 * @property int|null $customer_representative_id
 * @property bool|null $send_invoice
 *
 * @property \App\Model\Entity\State $state
 * @property \App\Model\Entity\Country $country
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\CustomerRepresentative $customer_representative
 * @property \App\Model\Entity\BillingDetail[] $billing_details
 * @property \App\Model\Entity\ClientRequest[] $client_requests
 * @property \App\Model\Entity\ContractorAnswer[] $contractor_answers
 * @property \App\Model\Entity\ContractorContact[] $contractor_contacts
 * @property \App\Model\Entity\ContractorDoc[] $contractor_docs
 * @property \App\Model\Entity\ContractorInvoice[] $contractor_invoices
 * @property \App\Model\Entity\ContractorService[] $contractor_services
 * @property \App\Model\Entity\ContractorSite[] $contractor_sites
 * @property \App\Model\Entity\ContractorTempsite[] $contractor_tempsites
 * @property \App\Model\Entity\ContractorUser[] $contractor_users
 * @property \App\Model\Entity\Document[] $documents
 * @property \App\Model\Entity\Employee[] $employees
 * @property \App\Model\Entity\Explanation[] $explanations
 * @property \App\Model\Entity\Icon[] $icons
 * @property \App\Model\Entity\Lead[] $leads
 * @property \App\Model\Entity\Note[] $notes
 * @property \App\Model\Entity\NotesOld[] $notes_old
 * @property \App\Model\Entity\OverallIcon[] $overall_icons
 * @property \App\Model\Entity\Payment[] $payments
 * @property \App\Model\Entity\Review[] $reviews
 * @property \App\Model\Entity\SuggestedIcon[] $suggested_icons
 * @property \App\Model\Entity\SuggestedOverallIcon[] $suggested_overall_icons
 */
class Contractor extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'company_name' => true,
        'addressline_1' => true,
        'addressline_2' => true,
        'city' => true,
        'state_id' => true,
        'country_id' => true,
        'zip' => true,
        'pri_contact_fn' => true,
        'pri_contact_ln' => true,
        'pri_contact_pn' => true,
        'is_safety_sensitive' => true,
        'user_id' => true,
        'registration_status' => true,
        'payment_status' => true,
        'is_locked' => true,
        'created' => true,
        'modified' => true,
        'latitude' => true,
        'longitude' => true,
        'tnc' => true,
        'waiting_on' => true,
        'company_tin' => true,
        'pri_contact_title' => true,
        'company_logo' => true,
        'canqualify_date' => true,
        'subscription_date' => true,
        'customer_representative_id' => true,
        'send_invoice' => true,
        'state' => true,
        'country' => true,
        'user' => true,
        'customer_representative' => true,
        'billing_details' => true,
        'client_requests' => true,
        'contractor_answers' => true,
        'contractor_contacts' => true,
        'contractor_docs' => true,
        'contractor_invoices' => true,
        'contractor_services' => true,
        'contractor_sites' => true,
        'contractor_tempsites' => true,
        'contractor_users' => true,
        'documents' => true,
        'employees' => true,
        'explanations' => true,
        'icons' => true,
        'leads' => true,
        'notes' => true,
        'notes_old' => true,
        'overall_icons' => true,
        'payments' => true,
        'reviews' => true,
        'suggested_icons' => true,
        'suggested_overall_icons' => true
    ];
}
