<?php
    class ProfileController extends Front {

        function __construct() {
                parent::__construct();
                $this->loadModel('Users');
		$this->loadModel('Pictures');
        }

        function index() {
	    $this->redirect($this->buildLink('profile/view'));
        }
	
	function view() {
	    $id = $_SESSION['user'];
	    $this->data['mypictures'] = $this->Users->findMyPics($id);
	    $this->data['profile'] = $this->Users->find($id);
	    $this->data['picturesFound'] = count($this->Pictures->findAll());
	    $this->loadView('profile/view', $this->data);
	}
	
	function update($id){
	    $this->Users->save($_POST['User'], $id);
	    $this->redirect($this->buildLink('profile/view/'));
	}
	
	function delete($id) {
	    $picturesFound = count($this->Pictures->findAll());
	    if($id < $picturesFound ){
		$idnext = $id+1;
	    } else {
		$idnext = $id-1;
	    }
		$this->Pictures->remove($id);
		echo "id";
		$this->redirect($this->buildLink('profile/view/'. $idnext));
	}
    }