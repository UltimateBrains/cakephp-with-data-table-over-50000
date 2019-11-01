<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ContractorAnswer Entity
 *
 * @property int $id
 * @property int $contractor_id
 * @property int $question_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int $created_by
 * @property int|null $modified_by
 * @property string|null $answer
 * @property int|null $year
 * @property int|null $client_id
 *
 * @property \App\Model\Entity\Contractor $contractor
 * @property \App\Model\Entity\Question $question
 * @property \App\Model\Entity\Client $client
 */
class ContractorAnswer extends Entity
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
        'contractor_id' => true,
        'question_id' => true,
        'created' => true,
        'modified' => true,
        'created_by' => true,
        'modified_by' => true,
        'answer' => true,
        'year' => true,
        'client_id' => true,
        'contractor' => true,
        'question' => true,
        'client' => true
    ];
}
