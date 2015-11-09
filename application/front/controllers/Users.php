<?php
	class UsersController extends Front {
	
		function __construct() {
			parent::__construct();
			$this->loadModel('Users');
		}
		
		function index() {
		    
		    $currentPage = $_GET['page'] ? $_GET['page'] : 1;
		    
		    $this->data['users'] = $this->Users->findAll('', array('page' => $currentPage));
		    $this->loadView('users/index',$this->data);
		}
	}