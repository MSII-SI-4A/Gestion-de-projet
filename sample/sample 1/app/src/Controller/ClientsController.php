<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Clients Controller
 *
 * @property App\Model\Table\ClientsTable $Clients
 */
class ClientsController extends AppController {
/**
 * Index method
 *
 * @return void
 */
	public function index() {
		$this->set('clients', $this->paginate($this->Clients));
	}

/**
 * View method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function view($id = null) {
		$client = $this->Clients->get($id, [
			'contain' => ['Commands']
		]);
		$this->set('client', $client);
	}

/**
 * Add method
 *
 * @return void
 */
	public function add() {
		$client = $this->Clients->newEntity($this->request->data);
		if ($this->request->is('post')) {
			if ($this->Clients->save($client)) {
				$this->Flash->success('The client has been saved.');
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('The client could not be saved. Please, try again.');
			}
		}
		$this->set(compact('client'));
	}

/**
 * Edit method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function edit($id = null) {
		$client = $this->Clients->get($id, [
			'contain' => []
		]);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$client = $this->Clients->patchEntity($client, $this->request->data);
			if ($this->Clients->save($client)) {
				$this->Flash->success('The client has been saved.');
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('The client could not be saved. Please, try again.');
			}
		}
		$this->set(compact('client'));
	}

/**
 * Delete method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function delete($id = null) {
		$client = $this->Clients->get($id);
		$this->request->allowMethod(['post', 'delete']);
		if ($this->Clients->delete($client)) {
			$this->Flash->success('The client has been deleted.');
		} else {
			$this->Flash->error('The client could not be deleted. Please, try again.');
		}
		return $this->redirect(['action' => 'index']);
	}

}
