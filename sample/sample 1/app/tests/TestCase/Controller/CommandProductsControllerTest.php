<?php
namespace App\Test\TestCase\Controller;

use App\Controller\CommandProductsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\CommandProductsController Test Case
 */
class CommandProductsControllerTest extends IntegrationTestCase {

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
 * Test index method
 *
 * @return void
 */
	public function testIndex() {
		$this->markTestIncomplete('Not implemented yet.');
	}

/**
 * Test view method
 *
 * @return void
 */
	public function testView() {
		$this->markTestIncomplete('Not implemented yet.');
	}

/**
 * Test add method
 *
 * @return void
 */
	public function testAdd() {
		$this->markTestIncomplete('Not implemented yet.');
	}

/**
 * Test edit method
 *
 * @return void
 */
	public function testEdit() {
		$this->markTestIncomplete('Not implemented yet.');
	}

/**
 * Test delete method
 *
 * @return void
 */
	public function testDelete() {
		$this->markTestIncomplete('Not implemented yet.');
	}

}
