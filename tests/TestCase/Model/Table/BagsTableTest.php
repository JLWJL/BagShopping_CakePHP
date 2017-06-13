<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BagsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BagsTable Test Case
 */
class BagsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BagsTable
     */
    public $Bags;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.bags'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Bags') ? [] : ['className' => BagsTable::class];
        $this->Bags = TableRegistry::get('Bags', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Bags);

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
}
