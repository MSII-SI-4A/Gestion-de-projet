<?php
namespace App\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use App\Model\Table\CommandProductsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CommandProductsTable Test Case
 */
class CommandProductsTableTest extends TestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = [
		'CommandProducts' => 'app.command_products', 
		'Commands' => 'app.commands', 
		'Clients' => 'app.clients', 
		'Products' => 'app.products', 
		'Types' => 'app.types'
	];

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$config = TableRegistry::exists('CommandProducts') ? [] : ['className' => 'App\Model\Table\CommandProductsTable'];

		$this->CommandProducts = TableRegistry::get('CommandProducts', $config);

	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CommandProducts);

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
