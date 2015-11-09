<?php
	class HomeController extends admin {

	function __construct() {
		parent::__construct();
		$this->loadModel('Pictures');
		$this->loadModel('Users');
	}

	function index() {

		$this->data['pictures'] = $this->Pictures->findAll('', array('limit'=>5,'order'=>'ID DESC'));
		$this->data['users'] = $this->Users->findAll('', array('limit'=>5,'order'=>'ID DESC'));
		$this->loadView('home/index',$this->data);
		
	   }   	
	}
	