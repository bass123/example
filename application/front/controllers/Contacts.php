<?php
    class ContactsController extends Front {

        function __construct() {
                parent::__construct();
                $this->loadModel('Contacts');
        }

        function index() {
	    $this->loadView('contacts/index');
        }
	
	function sendmail(){
	    if($this->action){
		$this->Contacts->create($_POST['Contacts']);
	    }
	    $this->redirect($this->buildLink('home'));
	    
	}
	
    }