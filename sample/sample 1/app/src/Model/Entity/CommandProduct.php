<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CommandProduct Entity.
 */
class CommandProduct extends Entity {

/**
 * Fields that can be mass assigned using newEntity() or patchEntity().
 *
 * @var array
 */
	protected $_accessible = [
		'nb' => true,
		'command' => true,
		'product' => true,
	];

}
