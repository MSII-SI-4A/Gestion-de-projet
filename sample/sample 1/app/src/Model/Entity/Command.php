<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Command Entity.
 */
class Command extends Entity {

/**
 * Fields that can be mass assigned using newEntity() or patchEntity().
 *
 * @var array
 */
	protected $_accessible = [
		'client_id' => true,
		'client' => true,
		'command_products' => true,
	];

}
