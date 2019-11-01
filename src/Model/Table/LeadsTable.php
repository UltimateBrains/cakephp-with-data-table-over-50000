<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Leads Model
 *
 * @property \App\Model\Table\ClientsTable&\Cake\ORM\Association\BelongsTo $Clients
 * @property \App\Model\Table\ContractorsTable&\Cake\ORM\Association\BelongsTo $Contractors
 * @property \App\Model\Table\LeadStatusTable&\Cake\ORM\Association\BelongsTo $LeadStatus
 *
 * @method \App\Model\Entity\Lead get($primaryKey, $options = [])
 * @method \App\Model\Entity\Lead newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Lead[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Lead|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Lead saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Lead patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Lead[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Lead findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LeadsTable extends Table
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

        $this->setTable('leads');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Clients', [
            'foreignKey' => 'client_id'
        ]);
        $this->belongsTo('Contractors', [
            'foreignKey' => 'contractor_id'
        ]);
        $this->belongsTo('LeadStatus', [
            'foreignKey' => 'lead_status_id'
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
            ->maxLength('company_name', 255)
            ->allowEmptyString('company_name');

        $validator
            ->scalar('contact_name_first')
            ->maxLength('contact_name_first', 45)
            ->allowEmptyString('contact_name_first');

        $validator
            ->scalar('contact_name_last')
            ->maxLength('contact_name_last', 45)
            ->allowEmptyString('contact_name_last');

        $validator
            ->scalar('phone_no')
            ->maxLength('phone_no', 45)
            ->allowEmptyString('phone_no');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('city')
            ->maxLength('city', 45)
            ->allowEmptyString('city');

        $validator
            ->scalar('state')
            ->maxLength('state', 45)
            ->allowEmptyString('state');

        $validator
            ->scalar('zip_code')
            ->maxLength('zip_code', 45)
            ->allowEmptyString('zip_code');

        $validator
            ->scalar('description_of_work')
            ->maxLength('description_of_work', 155)
            ->allowEmptyString('description_of_work');

        $validator
            ->integer('created_by')
            ->allowEmptyString('created_by');

        $validator
            ->integer('modified_by')
            ->allowEmptyString('modified_by');

        $validator
            ->scalar('address')
            ->allowEmptyString('address');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['client_id'], 'Clients'));
        $rules->add($rules->existsIn(['contractor_id'], 'Contractors'));
        $rules->add($rules->existsIn(['lead_status_id'], 'LeadStatus'));

        return $rules;
    }
}
