<?php
App::uses('AppController', 'Controller');
/**
 * Sets Controller
 *
 * @property Set $Set
 * @property PaginatorComponent $Paginator
 */
class SetsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Set->recursive = 0;
		$this->set('sets', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Set->exists($id)) {
			throw new NotFoundException(__('Invalid set'));
		}
		$options = array('conditions' => array('Set.' . $this->Set->primaryKey => $id));
		$this->set('set', $this->Set->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Set->create();
			if ($this->Set->save($this->request->data)) {
				$this->Session->setFlash(__('The set has been saved.'));
				return $this->redirect(array('action' => 'select'));
			} else {
				$this->Session->setFlash(__('The set could not be saved. Please, try again.'));
			}
		}
		//$tests = $this->Set->Test->find('list');
		//$this->set(compact('tests'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Set->exists($id)) {
			throw new NotFoundException(__('Invalid set'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Set->save($this->request->data)) {
				$this->Session->setFlash(__('The set has been saved.'));
				return $this->redirect(array('action' => 'select'));
			} else {
				$this->Session->setFlash(__('The set could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Set.' . $this->Set->primaryKey => $id));
			$this->request->data = $this->Set->find('first', $options);
		}
		//$tests = $this->Set->Test->find('list');
		//$this->set(compact('tests'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Set->id = $id;
		if (!$this->Set->exists()) {
			throw new NotFoundException(__('Invalid set'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Set->delete()) {
			$this->Session->setFlash(__('The set has been deleted.'));
		} else {
			$this->Session->setFlash(__('The set could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'select'));
	}















/*
 *		Custom functionality
 */

	public function select() {
		$this->Set->recursive = 0;
		$this->set('sets', $this->Paginator->paginate());
	}

	public function sel($setid) {
		$this->Session->write('Active.SetId', $setid);
		return $this->redirect(array('controller'=>'cards', 'action'=>'build'));
	}

	public function test($id = null) {
		if (!$this->Set->exists($id)) {
			$this->Session->setFlash('Invalid Set');
			$this->redirect(array('action'=>'select'));
		}
		//$options = array('conditions' => array('Set.' . $this->Set->primaryKey => $id));
		//$this->set('set', $this->Set->find('first', $options));

		//$options = array('conditions' => array('Card.' . $this->Card->primaryKey => $id));
		//$this->set('card', $this->Card->find('first', $options));

		// get total number of cards in the set
		$total = $this->Set->query("select count(*) as total FROM `cards` WHERE set_id = '".$id."';");

		// get random number of total
		$randomCard = rand(1,$total[0][0]['total']);
		$randomCard -= 1;

		// get card number N
		$card = $this->Set->query("select * FROM `cards` WHERE set_id = '".$id."' LIMIT ".$randomCard.",1;");
		$card = $card[0];

		$this->set(compact('card'));
	}

	public function testb($id = null) {
		// get card number N
		$card = $this->Set->query("select * FROM `cards` WHERE id = ".$id.";");
		$card = $card[0];

		$this->set(compact('card'));
	}










}
