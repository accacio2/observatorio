<?php
/**
 * AppController
 */

App::uses('Controller', 'Controller');

class AppController extends Controller {

	/**
	 * Chama os models definidos
	 */
	public $uses = array(
		'User'
	);

	/**
	 * Componentes utilizados na aplica��o
	 */
	public $components = array(
		'Auth',
		'Session',
		'Cookie'
	);

	public function admin_home() {

	}

	/**
	 * M�todos carregados antes da action ser chamada 
	 */
	public function beforeFilter()
	{

		// Se acessar prefixo cliente
		if ($this->isPrefix('admin')):

			// Troca o layout
			$this->layout = 'cms';

			// Configura��es do Auth
			$this->_authAdmin();

		else:

			// Libera as demais p�ginas
			$this->Auth->allow();

		endif;

		// Seta o usu�rio
		if ($this->Auth->user())
            $this->set(array('user' => $this->Auth->user()));

	}

	/**
	 * Fun��o para verificar o prefixo atual
	 */
	private function isPrefix($prefix)
	{
		return isset($this->request->params['prefix']) &&
					 $this->request->params['prefix'] == $prefix;
	}

	/**
	 * Configura��es Auth Component Admin
	 */
	private function _authAdmin()
	{

		// Configura��es do Cookie
		$this->Cookie->time = '30 Days';
		$this->Cookie->key = 'FF()XA(S*D)AS3sA(Sd80A(SDA*STDASAS#!@2DSA4$AS#SD@ASDtyASIH)_AS0dAoIASNKAshgaFfda3tFASDASgfSG3d#A@$SDAZCHVASCa4s33%$�$%$#s253$AS5#�$%s645$#AS@%#A�S6%A&*S�%S$';
		$this->Cookie->httpOnly = true;

		// Chave da Sess�o
		AuthComponent::$sessionKey = 'Auth.Admin';

		// Configura��es de Autentica��o
		$this->Auth->authenticate = array(
			'Blowfish' => array(
				'userModel' => 'User',
				'scope' => array(
					'User.is_active' => true
				)
			)
		);

		// P�gina de login
		$this->Auth->loginAction = array('controller' => 'users', 'action' => 'login', 'admin' => true);

		// Redirecionamento ao logar
		$this->Auth->loginRedirect = array('controller' => 'home', 'action' => 'index', 'admin' => true);

		// Redirecionamento ao sair
		$this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login', 'admin' => true);

		if (!$this->Auth->loggedIn() && $this->Cookie->check('Auth.Admin')):

			// Cookie
			$cookie = $this->Cookie->read('Auth.Admin');

			// Busca o usu�rio
			$usuario = $this->User->find('first', array(
				'conditions' => array(
						'User.username' => $cookie['username']
					)
				)
			);

			// Login manual do usu�rio
			if ($this->Auth->login($usuario['User'])){
				$this->redirect('/admin');
			}

			// Login automatico do usu�rio
			if ($this->Auth->loggedIn() && $this->params->controller == 'users' && $this->params->action == 'admin_login')
				$this->redirect('/admin');

		endif;

	}
		
		
}
