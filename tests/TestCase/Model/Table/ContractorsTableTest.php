<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContractorsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContractorsTable Test Case
 */
class ContractorsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ContractorsTable
     */
    public $Contractors;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Contractors',
        'app.States',
        'app.Countries',
        'app.Users',
        'app.CustomerRepresentative',
        'app.BillingDetails',
        'app.ClientRequests',
        'app.ContractorAnswers',
        'app.ContractorContacts',
        'app.ContractorDocs',
        'app.ContractorInvoices',
        'app.ContractorServices',
        'app.ContractorSites',
        'app.ContractorTempsites',
        'app.ContractorUsers',
        'app.Documents',
        'app.Employees',
        'app.Explanations',
        'app.Icons',
        'app.Leads',
        'app.Notes',
        'app.NotesOld',
        'app.OverallIcons',
        'app.Payments',
        'app.Reviews',
        'app.SuggestedIcons',
        'app.SuggestedOverallIcons'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Contractors') ? [] : ['className' => ContractorsTable::class];
        $this->Contractors = TableRegistry::getTableLocator()->get('Contractors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Contractors);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
