<?php
App::uses('AppController', 'Controller');
/**
 * ProductFamilies Controller
 *
 * @property ProductFamily $ProductFamily
 * @property PaginatorComponent $Paginator
 */
class ProductFamiliesController extends AppController {

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
		$this->ProductFamily->recursive = 0;
		$this->set('productFamilies', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ProductFamily->exists($id)) {
			throw new NotFoundException(__('Invalid product family'));
		}
		$options = array('conditions' => array('ProductFamily.' . $this->ProductFamily->primaryKey => $id));
		$this->set('productFamily', $this->ProductFamily->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProductFamily->create();
			if ($this->ProductFamily->save($this->request->data)) {
				$this->Session->setFlash(__('The product family has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product family could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ProductFamily->exists($id)) {
			throw new NotFoundException(__('Invalid product family'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ProductFamily->save($this->request->data)) {
				$this->Session->setFlash(__('The product family has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product family could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ProductFamily.' . $this->ProductFamily->primaryKey => $id));
			$this->request->data = $this->ProductFamily->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ProductFamily->id = $id;
		if (!$this->ProductFamily->exists()) {
			throw new NotFoundException(__('Invalid product family'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ProductFamily->delete()) {
			$this->Session->setFlash(__('The product family has been deleted.'));
		} else {
			$this->Session->setFlash(__('The product family could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
