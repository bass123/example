<?php
	class UsersController extends admin {
	
		function __construct() {
			parent::__construct();
			$this->loadModel('Users');
			$this->loadModel('Pictures');
		}
		
		function index() {
		    
		    $currentPage = $_GET['page'] ? $_GET['page'] : 1;
		    
		    $this->data['users'] = $this->Users->findAll('', array('page' => $currentPage));
		    $this->loadView('users/index',$this->data);
		}
		
			
		function getCommentars($id){
		    $this->data['commentars'] = $this->Users->getCommentars($id);
		    $this->data['user_id'] = $id;
		    $this->loadView('commentars/users',$this->data);
		}
		
		function delete($id) {
			$this->Users->remove($id);
			$this->redirect($this->buildLink('users/index/'));
		}
		

		function edit($id) {
		    $this->data['profile'] = $this->Users->find($id);
		    $this->loadView('users/edit', $this->data);
		}

		function update($id){
		    $this->Users->save($_POST['User'], $id);
		    $this->redirect($this->buildLink('users/index'));
		}
		
	}