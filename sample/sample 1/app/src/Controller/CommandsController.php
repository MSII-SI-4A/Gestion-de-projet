<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Commands Controller
 *
 * @property App\Model\Table\CommandsTable $Commands
 */
class CommandsController extends AppController {
/**
 * Index method
 *
 * @return void
 */
	public function index() {
		$this->paginate = [
			'contain' => ['Clients']
		];
		$this->set('commands', $this->paginate($this->Commands));
	}

/**
 * View method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function view($id = null) {
		$command = $this->Commands->get($id, [
			'contain' => ['Clients', 'CommandProducts']
		]);
		$this->set('command', $command);
	}

/**
 * Add method
 *
 * @return void
 */
	public function add() {
		$command = $this->Commands->newEntity($this->request->data);
		if ($this->request->is('post')) {
			if ($this->Commands->save($command)) {
				$this->Flash->success('The command has been saved.');
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('The command could not be saved. Please, try again.');
			}
		}
		$clients = $this->Commands->Clients->find('list');
		$this->set(compact('command', 'clients'));
	}

/**
 * Edit method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function edit($id = null) {
		$command = $this->Commands->get($id, [
			'contain' => []
		]);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$command = $this->Commands->patchEntity($command, $this->request->data);
			if ($this->Commands->save($command)) {
				$this->Flash->success('The command has been saved.');
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('The command could not be saved. Please, try again.');
			}
		}
		$clients = $this->Commands->Clients->find('list');
		$this->set(compact('command', 'clients'));
	}

/**
 * Delete method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function delete($id = null) {
		$command = $this->Commands->get($id);
		$this->request->allowMethod(['post', 'delete']);
		if ($this->Commands->delete($command)) {
			$this->Flash->success('The command has been deleted.');
		} else {
			$this->Flash->error('The command could not be deleted. Please, try again.');
		}
		return $this->redirect(['action' => 'index']);
	}

}
