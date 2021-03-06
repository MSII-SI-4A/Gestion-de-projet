<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

/**
 * Initialization hook method.
 *
 * Use this method to add common initialization code like loading components.
 *
 * @return void
 */
	public function initialize() {
		$this->loadComponent('Flash');

		$this->loadComponent('Auth', [
			'loginAction' => [
	            'controller' => 'Clients',
	            'action' => 'login'
	        ],
	        'authorize' => 'Controller',
	        'authenticate' => [
	            'Form' => [
	            	'userModel' => 'Clients',
	                'fields' => ['username' => 'username', 'password' => 'password']
	            ]
	        ]
	    ]);

	    if($this->isAuthorized()){
	    	$this->Auth->allow();
	    }
	}

	// Gestion supra simple des droits
	// Une mise en place d'ACL serait à faire ici
	public function isAuthorized($user = null) {
        if($user != null){
        	return true;
        }

        if($this->request->params['controller'] == 'Clients'){
        	return true;
        }

        return false;
    }
}
