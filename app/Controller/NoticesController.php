<?php
App::uses('AppController', 'Controller');
/**
 * Notices Controller
 *
 * @property Notice $Notice
 * @property PaginatorComponent $Paginator
 */
class NoticesController extends AppController {

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
		$this->Notice->recursive = 0;
		$this->set('notices', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */	
	public function admin_view($id = null) {
		$this->Notice->id = $id;
		if (!$this->Notice->exists()) {
        throw new NotFoundException(__('Noticia Invalida'));
    }
    $this->set('notice', $this->Notice->read(null, $id));
}

/**
 * add method
 *
 * @return void
 */
 public function admin_add() {
    if ($this->request->is('post')) {
        $this->Notice->create();
        if ($this->Notice->save($this->request->data)) {
            $this->Session->setFlash(__('A Noticia foi salva.'));
            $this->redirect(array('action' => 'index'));
        } else {
            $this->Session->setFlash(__('A Noticia nao pode ser salva. Por favor, tente novamente.'));
        }
    }
}



/*
	public function add() {
		if ($this->request->is('post')) {
			$this->Notice->create();
			if ($this->Notice->save($this->request->data)) {
				$this->Session->setFlash(__('A Noticia foi salva.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('A Noticia nao pode ser salva. Por favor, tente novamente.'));
			}
		}
	}*/

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Notice->exists($id)) {
			throw new NotFoundException(__('Noticia Invalida'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Notice->save($this->request->data)) {
				$this->Session->setFlash(__('A Noticia foi salvo.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('A Noticia nao pode ser excluida. Por favor, tente novamente.'));
			}
		} else {
			$options = array('conditions' => array('Notice.' . $this->Notice->primaryKey => $id));
			$this->request->data = $this->Notice->find('first', $options);
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
		$this->Notice->id = $id;
		if (!$this->Notice->exists()) {
			throw new NotFoundException(__('Noticia Invalida'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Notice->delete()) {
			$this->Session->setFlash(__('A Noticia foi excluida.'));
		} else {
			$this->Session->setFlash(__('A Noticia nao pode ser excluida. Por favor, tente novamente.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
