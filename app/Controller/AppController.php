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
	 * Componentes utilizados na aplicação
	 */
	public $components = array(
		'Auth',
		'Session',
		'Cookie'
	);

	public function admin_home() {

	}

	/**
	 * Métodos carregados antes da action ser chamada 
	 */
	public function beforeFilter()
	{

		// Se acessar prefixo cliente
		if ($this->isPrefix('admin')):

			// Troca o layout
			$this->layout = 'cms';

			// Configurações do Auth
			$this->_authAdmin();

		else:

			// Libera as demais páginas
			$this->Auth->allow();

		endif;

		// Seta o usuário
		if ($this->Auth->user())
            $this->set(array('user' => $this->Auth->user()));

	}

	/**
	 * Função para verificar o prefixo atual
	 */
	private function isPrefix($prefix)
	{
		return isset($this->request->params['prefix']) &&
					 $this->request->params['prefix'] == $prefix;
	}

	/**
	 * Configurações Auth Component Admin
	 */
	private function _authAdmin()
	{

		// Configurações do Cookie
		$this->Cookie->time = '30 Days';
		$this->Cookie->key = 'FF()XA(S*D)AS3sA(Sd80A(SDA*STDASAS#!@2DSA4$AS#SD@ASDtyASIH)_AS0dAoIASNKAshgaFfda3tFASDASgfSG3d#A@$SDAZCHVASCa4s33%$ˆ$%$#s253$AS5#Â$%s645$#AS@%#AˆS6%A&*SÂ%S$';
		$this->Cookie->httpOnly = true;

		// Chave da Sessão
		AuthComponent::$sessionKey = 'Auth.Admin';

		// Configurações de Autenticação
		$this->Auth->authenticate = array(
			'Blowfish' => array(
				'userModel' => 'User',
				'scope' => array(
					'User.is_active' => true
				)
			)
		);

		// Página de login
		$this->Auth->loginAction = array('controller' => 'users', 'action' => 'login', 'admin' => true);

		// Redirecionamento ao logar
		$this->Auth->loginRedirect = array('controller' => 'home', 'action' => 'index', 'admin' => true);

		// Redirecionamento ao sair
		$this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login', 'admin' => true);

		if (!$this->Auth->loggedIn() && $this->Cookie->check('Auth.Admin')):

			// Cookie
			$cookie = $this->Cookie->read('Auth.Admin');

			// Busca o usuário
			$usuario = $this->User->find('first', array(
				'conditions' => array(
						'User.username' => $cookie['username']
					)
				)
			);

			// Login manual do usuário
			if ($this->Auth->login($usuario['User'])){
				$this->redirect('/admin');
			}

			// Login automatico do usuário
			if ($this->Auth->loggedIn() && $this->params->controller == 'users' && $this->params->action == 'admin_login')
				$this->redirect('/admin');

		endif;

	}
		
		
}
