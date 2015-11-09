<?php
	class HomeController extends Front {

	function __construct() {
		parent::__construct();
		$this->loadModel('Pictures');
		$this->loadModel('Users');
	}

	function index() {

		$this->data['pictures'] = $this->Pictures->findAll('', array('limit'=>10));
		$this->loadView('home/index',$this->data);
	   }   

	function login(){
	   $user = $this->Users->login($_POST['user_name'],($_POST['password']));
	   if($user['ID']){
	       session_start();
	       $_SESSION['user'] = $user['ID'];  
	       $_SESSION['user_name'] = $user['user_name'];  
	       $_SESSION['name'] = $user['name'];  
	       $_SESSION['lastname'] = $user['lastname'];  
	       $_SESSION['email_address'] = $user['email_address'];  
	       $_SESSION['user_type'] = $user['user_type'];  
	       $this->redirect($this->buildLink('home'));
	   }
	}
	
	function registrate(){
	    if($this->action){
		if($_POST['Password']['first'] == $_POST['Password']['second']){
		    $_POST['User']['password'] = $_POST['Password']['first'];
		    $id = $this->Users->create($_POST['User']);
		    
		    session_start();
		    
		    $_SESSION['user'] = $id;  
		    $_SESSION['user_name'] = $_POST['User']['user_name'];  
		    $_SESSION['name'] = $_POST['User']['name'];  
		    $_SESSION['lastname'] = $_POST['User']['lastname'];  
		    $_SESSION['email_address'] = $_POST['User']['email_address']; 
		    $_SESSION['user_type'] = '1'; 
		} else {
		    $this->redirect($this->buildLink('home'));  
		}
		
	    }
	    $this->redirect($this->buildLink('home'));
	    
	}
	
	function logout(){
		session_start();
		session_unset();
		session_destroy();
		ob_start();
		$this->redirect($this->buildLink('home'));
	}

    }
	