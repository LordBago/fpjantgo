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
	public $components = array('RequestHandler','Session');
	public $helpers = array('Html', 'Form', 'Time', 'Js');
    public $paginate = array(
        'limit' => 10,
        'order' => array(
            'ProductFamily.id' => 'asc'
        )
    );

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ProductFamily->recursive = 0;
        $this->paginate['ProductFamilie']['limit'] = 10;
        $this->paginate['ProductFamilie']['order'] = array('ProductFamily.id' => 'asc');
        //$this->Paginator->settings = $this->paginate;
        $this->set('productFamilies', $this->paginate());
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
				$this->Session->setFlash('The product family has been saved.','default', array('class'=>'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The product family could not be saved. Please, try again.','default', array('class' => 'alert alert-danger'));
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
				$this->Session->setFlash('The product family has been saved.','default',array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The product family could not be saved. Please, try again.','default', array('class' => 'alert alert-danger'));
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
			$this->Session->setFlash('The product family has been deleted.', 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash('The product family could not be deleted. Please, try again.','default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
