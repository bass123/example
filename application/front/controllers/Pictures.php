<?php
	class PicturesController extends Front {
	
		function __construct() {
			parent::__construct();
			$this->loadModel('Pictures');
		}
		
		function index() {
		    
		    $currentPage = $_GET['page'] ? $_GET['page'] : 1;
		    
		    $this->data['pictures'] = $this->Pictures->findAll('', array('page' => $currentPage));
		    
		    $this->loadView('pictures/index',$this->data);
		}
	}
