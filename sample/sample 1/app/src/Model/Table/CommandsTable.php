<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Commands Model
 */
class CommandsTable extends Table {

/**
 * Initialize method
 *
 * @param array $config The configuration for the Table.
 * @return void
 */
	public function initialize(array $config) {
		$this->table('commands');
		$this->displayField('id');
		$this->primaryKey('id');
		$this->belongsTo('Clients', [
			'alias' => 'Clients', 
			'foreignKey' => 'client_id'
		]);
		$this->hasMany('CommandProducts', [
			'alias' => 'CommandProducts', 
			'foreignKey' => 'command_id'
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
			->add('client_id', 'valid', ['rule' => 'numeric'])
			->requirePresence('client_id', 'create')
			->notEmpty('client_id');

		return $validator;
	}

}
