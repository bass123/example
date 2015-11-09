<?php
class UserController extends Front {

        function __construct() {
                parent::__construct();
                $this->loadModel('Users');
        }
	
	function view($id) {
	    $this->data['userpictures'] = $this->Users->findMyPics($id);
	    $this->data['user'] = $this->Users->find($id);
	    $this->loadView('user/view', $this->data);
	}
}
