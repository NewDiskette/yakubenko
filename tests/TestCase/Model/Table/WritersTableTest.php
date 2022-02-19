<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WritersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WritersTable Test Case
 */
class WritersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\WritersTable
     */
    public $Writers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Writers',
        'app.Books',
        'app.Categories',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Writers') ? [] : ['className' => WritersTable::class];
        $this->Writers = TableRegistry::getTableLocator()->get('Writers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Writers);

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
