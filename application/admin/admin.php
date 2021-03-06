<?php	
	class Admin extends Application {
		
		function __construct() {
			$this->template = 'main';
			$this->language = 'english';
			$this->fullpath = dirname(__FILE__);
			$this->time = time();
			
			parent::__construct();
			
			if (count($_GET))
				$this->protectArr($_GET);
			
			if (count($_POST))
				$this->protectArr($_POST);
			
			$this->loadModel('DB');
			
			if ($_POST['Action'] || $_POST['Action_x'])
				$this->action = $_POST['Action'] ? $_POST['Action'] : $_POST['Action_x'];
		}
		
		function displayDate($date) {
			return $date ? date($this->dateFormat, $date) : '';
		}
		
		function protectArr(&$arr) {  
			if (is_array($arr)) {
				foreach ($arr as &$val)
					$this->protectArr($val);  
			} else
				$arr = addslashes(stripslashes(strip_tags($arr)));
		}
	}
?>
