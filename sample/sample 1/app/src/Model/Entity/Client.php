<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * Client Entity.
 */
class Client extends Entity {

/**
 * Fields that can be mass assigned using newEntity() or patchEntity().
 *
 * @var array
 */
	protected $_accessible = [
		'username' => true,
		'password' => true,
		'email' => true,
		'firstname' => true,
		'lastname' => true,
		'commands' => true,
	];


	protected function _setPassword($password) {
        return (new DefaultPasswordHasher)->hash($password);
    }
}
