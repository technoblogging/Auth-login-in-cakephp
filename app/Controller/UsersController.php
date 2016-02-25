<?php
App::uses('AppController', 'Controller');

class UsersController extends AppController {


	public $components = array('Paginator');
	

	public function beforeFilter() {

		parent::beforeFilter();
		$this->Auth->allow('login','add');

	}






	public function login() {
		
		
		if($this->request->is('post')){
			if($this->Auth->login()){
				$this->redirect(array('controller'=>'pages','action' => 'home'));
			}
			else
			{
				$this->Session->setFlash(__('Invalid username or password, Please try again.', null),  'default', 
				array('class' => 'errorDisplay'),'login');
			}
		}
	}







	public function logout() {
		$this->Auth->logout();
		$this->redirect(array('controller'=>'users', 'action'=>'login'));
	}





	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
	}


}
