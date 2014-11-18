<?php
namespace App\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use App\Model\Table\CommandsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CommandsTable Test Case
 */
class CommandsTableTest extends TestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = [
		'Commands' => 'app.commands', 
		'Clients' => 'app.clients', 
		'CommandProducts' => 'app.command_products'
	];

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$config = TableRegistry::exists('Commands') ? [] : ['className' => 'App\Model\Table\CommandsTable'];

		$this->Commands = TableRegistry::get('Commands', $config);

	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Commands);

		parent::tearDown();
	}

/**
 * Test initialize method
 *
 * @return void
 */
	public function testInitialize() {
		$this->markTestIncomplete('Not implemented yet.');
	}

/**
 * Test validationDefault method
 *
 * @return void
 */
	public function testValidationDefault() {
		$this->markTestIncomplete('Not implemented yet.');
	}

}
