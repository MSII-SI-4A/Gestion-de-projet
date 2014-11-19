<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CommandProducts Model
 */
class CommandProductsTable extends Table {

/**
 * Initialize method
 *
 * @param array $config The configuration for the Table.
 * @return void
 */
	public function initialize(array $config) {
		$this->table('command_products');
		$this->displayField('command_id');
		$this->primaryKey(['command_id', 'Product_id']);
		$this->belongsTo('Commands', [
			'alias' => 'Commands', 
			'foreignKey' => 'command_id'
		]);
		$this->belongsTo('Products', [
			'alias' => 'Products', 
			'foreignKey' => 'Product_id'
		]);
	}

/**
 * Default validation rules.
 *
 * @param \Cake\Validation\Validator $validator
 * @return \Cake\Validation\Validator
 */
	public function validationDefault(Validator $validator) {
		$validator
			->add('command_id', 'valid', ['rule' => 'numeric'])
			->allowEmpty('command_id', 'create')
			->add('Product_id', 'valid', ['rule' => 'numeric'])
			->allowEmpty('Product_id', 'create')
			->add('nb', 'valid', ['rule' => 'numeric'])
			->requirePresence('nb', 'create')
			->notEmpty('nb');

		return $validator;
	}

}
