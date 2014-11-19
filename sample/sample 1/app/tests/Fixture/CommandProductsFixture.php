<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CommandProductsFixture
 *
 */
class CommandProductsFixture extends TestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = [
		'command_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
		'Product_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
		'nb' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
		'_indexes' => [
			'command_id' => ['type' => 'index', 'columns' => ['command_id'], 'length' => []],
		],
		'_constraints' => [
			'primary' => ['type' => 'primary', 'columns' => ['command_id', 'Product_id'], 'length' => []],
			'IK_product' => ['type' => 'unique', 'columns' => ['Product_id'], 'length' => []],
		],
		'_options' => [
'engine' => 'InnoDB', 'collation' => 'latin1_swedish_ci'
		],
	];

/**
 * Records
 *
 * @var array
 */
	public $records = [
		[
			'command_id' => 1,
			'Product_id' => 1,
			'nb' => 1
		],
	];

}
