<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ContractorsController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\ContractorsController Test Case
 *
 * @uses \App\Controller\ContractorsController
 */
class ContractorsControllerTest extends TestCase
{
    use IntegrationTestTrait;

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
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
