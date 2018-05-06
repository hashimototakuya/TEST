<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AuthoritysTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AuthoritysTable Test Case
 */
class AuthoritysTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AuthoritysTable
     */
    public $Authoritys;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.authoritys',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Authoritys') ? [] : ['className' => AuthoritysTable::class];
        $this->Authoritys = TableRegistry::get('Authoritys', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Authoritys);

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
