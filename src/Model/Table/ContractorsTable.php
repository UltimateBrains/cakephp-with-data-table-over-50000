<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Contractors Model
 *
 * @property \App\Model\Table\StatesTable&\Cake\ORM\Association\BelongsTo $States
 * @property \App\Model\Table\CountriesTable&\Cake\ORM\Association\BelongsTo $Countries
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\CustomerRepresentativeTable&\Cake\ORM\Association\BelongsTo $CustomerRepresentative
 * @property \App\Model\Table\BillingDetailsTable&\Cake\ORM\Association\HasMany $BillingDetails
 * @property \App\Model\Table\ClientRequestsTable&\Cake\ORM\Association\HasMany $ClientRequests
 * @property \App\Model\Table\ContractorAnswersTable&\Cake\ORM\Association\HasMany $ContractorAnswers
 * @property \App\Model\Table\ContractorContactsTable&\Cake\ORM\Association\HasMany $ContractorContacts
 * @property \App\Model\Table\ContractorDocsTable&\Cake\ORM\Association\HasMany $ContractorDocs
 * @property \App\Model\Table\ContractorInvoicesTable&\Cake\ORM\Association\HasMany $ContractorInvoices
 * @property \App\Model\Table\ContractorServicesTable&\Cake\ORM\Association\HasMany $ContractorServices
 * @property \App\Model\Table\ContractorSitesTable&\Cake\ORM\Association\HasMany $ContractorSites
 * @property \App\Model\Table\ContractorTempsitesTable&\Cake\ORM\Association\HasMany $ContractorTempsites
 * @property \App\Model\Table\ContractorUsersTable&\Cake\ORM\Association\HasMany $ContractorUsers
 * @property \App\Model\Table\DocumentsTable&\Cake\ORM\Association\HasMany $Documents
 * @property \App\Model\Table\EmployeesTable&\Cake\ORM\Association\HasMany $Employees
 * @property \App\Model\Table\ExplanationsTable&\Cake\ORM\Association\HasMany $Explanations
 * @property \App\Model\Table\IconsTable&\Cake\ORM\Association\HasMany $Icons
 * @property \App\Model\Table\LeadsTable&\Cake\ORM\Association\HasMany $Leads
 * @property \App\Model\Table\NotesTable&\Cake\ORM\Association\HasMany $Notes
 * @property \App\Model\Table\NotesOldTable&\Cake\ORM\Association\HasMany $NotesOld
 * @property \App\Model\Table\OverallIconsTable&\Cake\ORM\Association\HasMany $OverallIcons
 * @property \App\Model\Table\PaymentsTable&\Cake\ORM\Association\HasMany $Payments
 * @property \App\Model\Table\ReviewsTable&\Cake\ORM\Association\HasMany $Reviews
 * @property \App\Model\Table\SuggestedIconsTable&\Cake\ORM\Association\HasMany $SuggestedIcons
 * @property \App\Model\Table\SuggestedOverallIconsTable&\Cake\ORM\Association\HasMany $SuggestedOverallIcons
 *
 * @method \App\Model\Entity\Contractor get($primaryKey, $options = [])
 * @method \App\Model\Entity\Contractor newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Contractor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Contractor|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contractor saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contractor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Contractor[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Contractor findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ContractorsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('contractors');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('States', [
            'foreignKey' => 'state_id'
        ]);
        $this->belongsTo('Countries', [
            'foreignKey' => 'country_id'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
        $this->belongsTo('CustomerRepresentative', [
            'foreignKey' => 'customer_representative_id'
        ]);
        $this->hasMany('BillingDetails', [
            'foreignKey' => 'contractor_id'
        ]);
        $this->hasMany('ClientRequests', [
            'foreignKey' => 'contractor_id'
        ]);
        $this->hasMany('ContractorAnswers', [
            'foreignKey' => 'contractor_id'
        ]);
        $this->hasMany('ContractorContacts', [
            'foreignKey' => 'contractor_id'
        ]);
        $this->hasMany('ContractorDocs', [
            'foreignKey' => 'contractor_id'
        ]);
        $this->hasMany('ContractorInvoices', [
            'foreignKey' => 'contractor_id'
        ]);
        $this->hasMany('ContractorServices', [
            'foreignKey' => 'contractor_id'
        ]);
        $this->hasMany('ContractorSites', [
            'foreignKey' => 'contractor_id'
        ]);
        $this->hasMany('ContractorTempsites', [
            'foreignKey' => 'contractor_id'
        ]);
        $this->hasMany('ContractorUsers', [
            'foreignKey' => 'contractor_id'
        ]);
        $this->hasMany('Documents', [
            'foreignKey' => 'contractor_id'
        ]);
        $this->hasMany('Employees', [
            'foreignKey' => 'contractor_id'
        ]);
        $this->hasMany('Explanations', [
            'foreignKey' => 'contractor_id'
        ]);
        $this->hasMany('Icons', [
            'foreignKey' => 'contractor_id'
        ]);
        $this->hasMany('Leads', [
            'foreignKey' => 'contractor_id'
        ]);
        $this->hasMany('Notes', [
            'foreignKey' => 'contractor_id'
        ]);
        $this->hasMany('NotesOld', [
            'foreignKey' => 'contractor_id'
        ]);
        $this->hasMany('OverallIcons', [
            'foreignKey' => 'contractor_id'
        ]);
        $this->hasMany('Payments', [
            'foreignKey' => 'contractor_id'
        ]);
        $this->hasMany('Reviews', [
            'foreignKey' => 'contractor_id'
        ]);
        $this->hasMany('SuggestedIcons', [
            'foreignKey' => 'contractor_id'
        ]);
        $this->hasMany('SuggestedOverallIcons', [
            'foreignKey' => 'contractor_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('company_name')
            ->maxLength('company_name', 155)
            ->allowEmptyString('company_name');

        $validator
            ->scalar('addressline_1')
            ->maxLength('addressline_1', 155)
            ->allowEmptyString('addressline_1');

        $validator
            ->scalar('addressline_2')
            ->maxLength('addressline_2', 155)
            ->allowEmptyString('addressline_2');

        $validator
            ->scalar('city')
            ->maxLength('city', 45)
            ->allowEmptyString('city');

        $validator
            ->scalar('zip')
            ->maxLength('zip', 45)
            ->allowEmptyString('zip');

        $validator
            ->scalar('pri_contact_fn')
            ->maxLength('pri_contact_fn', 45)
            ->allowEmptyString('pri_contact_fn');

        $validator
            ->scalar('pri_contact_ln')
            ->maxLength('pri_contact_ln', 45)
            ->allowEmptyString('pri_contact_ln');

        $validator
            ->scalar('pri_contact_pn')
            ->maxLength('pri_contact_pn', 45)
            ->allowEmptyString('pri_contact_pn');

        $validator
            ->boolean('is_safety_sensitive')
            ->allowEmptyString('is_safety_sensitive');

        $validator
            ->integer('registration_status')
            ->allowEmptyString('registration_status');

        $validator
            ->boolean('payment_status')
            ->allowEmptyString('payment_status');

        $validator
            ->boolean('is_locked')
            ->allowEmptyString('is_locked');

        $validator
            ->numeric('latitude')
            ->allowEmptyString('latitude');

        $validator
            ->numeric('longitude')
            ->allowEmptyString('longitude');

        $validator
            ->boolean('tnc')
            ->requirePresence('tnc', 'create')
            ->notEmptyString('tnc');

        $validator
            ->scalar('waiting_on')
            ->maxLength('waiting_on', 45)
            ->allowEmptyString('waiting_on');

        $validator
            ->scalar('company_tin')
            ->maxLength('company_tin', 155)
            ->allowEmptyString('company_tin');

        $validator
            ->scalar('pri_contact_title')
            ->maxLength('pri_contact_title', 155)
            ->allowEmptyString('pri_contact_title');

        $validator
            ->scalar('company_logo')
            ->maxLength('company_logo', 155)
            ->allowEmptyString('company_logo');

        $validator
            ->dateTime('canqualify_date')
            ->allowEmptyDateTime('canqualify_date');

        $validator
            ->date('subscription_date')
            ->allowEmptyDate('subscription_date');

        $validator
            ->boolean('send_invoice')
            ->allowEmptyString('send_invoice');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['state_id'], 'States'));
        $rules->add($rules->existsIn(['country_id'], 'Countries'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['customer_representative_id'], 'CustomerRepresentative'));

        return $rules;
    }
}
