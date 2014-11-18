<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Types Controller
 *
 * @property App\Model\Table\TypesTable $Types
 */
class TypesController extends AppController {
/**
 * Index method
 *
 * @return void
 */
	public function index() {
		$this->set('types', $this->paginate($this->Types));
	}

/**
 * View method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function view($id = null) {
		$type = $this->Types->get($id, [
			'contain' => ['Products']
		]);
		$this->set('type', $type);
	}

/**
 * Add method
 *
 * @return void
 */
	public function add() {
		$type = $this->Types->newEntity($this->request->data);
		if ($this->request->is('post')) {
			if ($this->Types->save($type)) {
				$this->Flash->success('The type has been saved.');
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('The type could not be saved. Please, try again.');
			}
		}
		$this->set(compact('type'));
	}

/**
 * Edit method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function edit($id = null) {
		$type = $this->Types->get($id, [
			'contain' => []
		]);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$type = $this->Types->patchEntity($type, $this->request->data);
			if ($this->Types->save($type)) {
				$this->Flash->success('The type has been saved.');
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('The type could not be saved. Please, try again.');
			}
		}
		$this->set(compact('type'));
	}

/**
 * Delete method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function delete($id = null) {
		$type = $this->Types->get($id);
		$this->request->allowMethod(['post', 'delete']);
		if ($this->Types->delete($type)) {
			$this->Flash->success('The type has been deleted.');
		} else {
			$this->Flash->error('The type could not be deleted. Please, try again.');
		}
		return $this->redirect(['action' => 'index']);
	}

}
