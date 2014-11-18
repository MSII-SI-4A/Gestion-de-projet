<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Products Model
 */
class ProductsTable extends Table {

/**
 * Initialize method
 *
 * @param array $config The configuration for the Table.
 * @return void
 */
	public function initialize(array $config) {
		$this->table('products');
		$this->displayField('name');
		$this->primaryKey('id');
		$this->belongsTo('Types', [
			'alias' => 'Types', 
			'foreignKey' => 'type_id'
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
			->add('id', 'valid', ['rule' => 'numeric'])
			->allowEmpty('id', 'create')
			->requirePresence('name', 'create')
			->notEmpty('name')
			->requirePresence('description', 'create')
			->notEmpty('description')
			->add('type_id', 'valid', ['rule' => 'numeric'])
			->requirePresence('type_id', 'create')
			->notEmpty('type_id')
			->add('value', 'valid', ['rule' => 'numeric'])
			->requirePresence('value', 'create')
			->notEmpty('value');

		return $validator;
	}

}
