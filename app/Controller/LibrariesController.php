<?php
App::uses('AppController', 'Controller');
/**
 * Libraries Controller
 *
 * @property Library $Library
 * @property PaginatorComponent $Paginator
 */
class LibrariesController extends AppController {

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
		$this->Library->recursive = 0;
		$this->set('libraries', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Library->exists($id)) {
			throw new NotFoundException(__('Biblioteca Inválida'));
		}
		$options = array('conditions' => array('Library.' . $this->Library->primaryKey => $id));
		$this->set('library', $this->Library->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Library->create();
			if ($this->Library->save($this->request->data)) {
				$this->Session->setFlash(__('A Biblioteca foi salva.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('A Biblioteca não pode ser salva. Por favor, tente novamente.'));
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
		if (!$this->Library->exists($id)) {
			throw new NotFoundException(__('Biblioteca Inválida'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Library->save($this->request->data)) {
				$this->Session->setFlash(__('A Biblioteca foi salva.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('A Biblioteca não pode ser salva. Por favor, tente novamente.'));
			}
		} else {
			$options = array('conditions' => array('Library.' . $this->Library->primaryKey => $id));
			$this->request->data = $this->Library->find('first', $options);
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
		$this->Library->id = $id;
		if (!$this->Library->exists()) {
			throw new NotFoundException(__('Biblioteca Inválida'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Library->delete()) {
			$this->Session->setFlash(__('A Biblioteca foi excluída.'));
		} else {
			$this->Session->setFlash(__('A Biblioteca não pode ser excluída. Por favor, tente novamente.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
