<?php
App::uses('AppController', 'Controller');
/**
 * Partners Controller
 *
 * @property Partner $Partner
 * @property PaginatorComponent $Paginator
 */
class PartnersController extends AppController {

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('Text');

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
	public function admin_index() {
		$this->Partner->recursive = 0;
		$this->set('partners', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
 /*
	public function view($id = null) {
		if (!$this->Partner->exists($id)) {
			throw new NotFoundException(__('Invalid partner'));
		}
		$options = array('conditions' => array('Partner.' . $this->Partner->primaryKey => $id));
		$this->set('partner', $this->Partner->find('first', $options));
	}*/
	
	public function admin_view($id = null) {
		$this->Partner->id = $id;
		if (!$this->Partner->exists()) {
        throw new NotFoundException(__('Parceiro Invalida'));
    }
    $this->set('partner', $this->Partner->read(null, $id));
}

/**
 * add method
 *
 * @return void
 */
	/*
	public function add() {
		if ($this->request->is('post')) {
			$this->Partner->create();
			if ($this->Partner->save($this->request->data)) {
				return $this->flash(__('The partner has been saved.'), array('action' => 'index'));
			}
		}
	}*/

	 public function admin_add() {
    if ($this->request->is('post')) {
        $this->Partner->create();
        if ($this->Partner->save($this->request->data)) {
            $this->Session->setFlash(__('O parceiro foi salvo.'));
            $this->redirect(array('action' => 'index'));
        } else {
            $this->Session->setFlash(__('O parceiro não foi salvo. Por favor, tente novamente.'));
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
	public function admin_edit($id = null) {
		if (!$this->Partner->exists($id)) {
			throw new NotFoundException(__('Parceiro Invalido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Partner->save($this->request->data)) {
				return $this->flash(__('O Parceiro foi salvo.'), array('action' => 'index'));
			}
		} else {
			$options = array('conditions' => array('Partner.' . $this->Partner->primaryKey => $id));
			$this->request->data = $this->Partner->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Partner->id = $id;
		if (!$this->Partner->exists()) {
			throw new NotFoundException(__('Parceiro Invalido'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Partner->delete()) {
			return $this->flash(__('O Parceiro foi excluído com sucesso.'), array('action' => 'index'));
		} else {
			return $this->flash(__('O Parceiro não foi excluído com sucesso. Por Favor, tente de novo.'), array('action' => 'index'));
		}
	}}
