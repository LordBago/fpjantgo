<?php
App::uses('AppController', 'Controller');
/**
 * Products Controller
 *
 * @property Product $Product
 * @property PaginatorComponent $Paginator
 */
class ProductsController extends AppController {

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
            'Product.id' => 'asc'
        )
    );


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Product->recursive = 0;
        $this->paginate['Product']['limit'] = 10;
        $this->paginate['Product']['order'] = array('Product.id' => 'asc');
        //$this->Paginator->settings = $this->paginate;
        $this->set('products', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Product->exists($id)) {
			throw new NotFoundException(__('Invalid product'));
		}
		$options = array('conditions' => array('Product.' . $this->Product->primaryKey => $id));
		$this->set('product', $this->Product->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Product->create();
			if ($this->Product->save($this->request->data)) {
				$this->Session->setFlash('The product has been saved.','default',array('class'=>'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The product could not be saved. Please, try again.','default',array('class'=>'alert alert-danger'));
			}
		}
		$productTypes = $this->Product->ProductType->find('list');
		$this->set(compact('productTypes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Product->exists($id)) {
			throw new NotFoundException(__('Invalid product'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Product->save($this->request->data)) {
				$this->Session->setFlash('The product has been saved.','default',array('class'=>'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The product could not be saved. Please, try again.','default',array('class'=>'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Product.' . $this->Product->primaryKey => $id));
			$this->request->data = $this->Product->find('first', $options);
		}
		$productTypes = $this->Product->ProductType->find('list');
		$this->set(compact('productTypes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Product->id = $id;
		if (!$this->Product->exists()) {
			throw new NotFoundException(__('Invalid product'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Product->delete()) {
			$this->Session->setFlash('The product has been deleted.','default',array('class'=>'alert alert-success'));
		} else {
			$this->Session->setFlash('The product could not be deleted. Please, try again.','default',array('class'=>'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
