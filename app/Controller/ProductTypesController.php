<?php
App::uses('AppController', 'Controller');
/**
 * ProductTypes Controller
 *
 * @property ProductType $ProductType
 * @property PaginatorComponent $Paginator
 */
class ProductTypesController extends AppController {

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
            'ProductType.id' => 'asc'
        )
    );


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ProductType->recursive = 0;
        
        $this->paginate['ProductType']['limit'] = 10;
        $this->paginate['ProductType']['order'] = array('ProductType.id' => 'asc');
        //$this->Paginator->settings = $this->paginate;
        $this->set('productTypes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ProductType->exists($id)) {
			throw new NotFoundException(__('Invalid product type'));
		}
		$options = array('conditions' => array('ProductType.' . $this->ProductType->primaryKey => $id));
		$this->set('productType', $this->ProductType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProductType->create();
			if ($this->ProductType->save($this->request->data)) {
				$this->Session->setFlash('The product type has been saved.','default',array('class'=>'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The product type could not be saved. Please, try again.','default',array('class'=>'alert alert-danger'));
			}
		}
		$productFamilies = $this->ProductType->ProductFamily->find('list');
		$this->set(compact('productFamilies'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ProductType->exists($id)) {
			throw new NotFoundException(__('Invalid product type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ProductType->save($this->request->data)) {
				$this->Session->setFlash('The product type has been saved.','default',array('class'=>'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The product type could not be saved. Please, try again.','default',array('class'=>'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('ProductType.' . $this->ProductType->primaryKey => $id));
			$this->request->data = $this->ProductType->find('first', $options);
		}
		$productFamilies = $this->ProductType->ProductFamily->find('list');
		$this->set(compact('productFamilies'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ProductType->id = $id;
		if (!$this->ProductType->exists()) {
			throw new NotFoundException(__('Invalid product type'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ProductType->delete()) {
			$this->Session->setFlash('The product type has been deleted.','default',array('class'=>'alert alert-success'));
		} else {
			$this->Session->setFlash('The product type could not be deleted. Please, try again.','default',array('class'=>'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
