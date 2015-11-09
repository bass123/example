<?php
    class PictureController extends Front {

        function __construct() {
                parent::__construct();
                $this->loadModel('Pictures');
		$this->loadModel('Commentars');
        }

        function index() {
	    $this->redirect($this->buildLink('home'));
        }
	
	function view($id) {
	    $this->data['picture'] = $this->Pictures->find($id);
	    $this->data['pictures'] = $this->Pictures->findAll();
	    $this->data['prevNext'] = $this->getPrevNext($this->data['pictures'],$id);
	    $this->data['commentars'] = $this->Pictures->getComentars($id);
	    $this->data['commentarsCount'] = count($this->data['commentars']);
	    $this->data['picturesFound'] = count($this->Pictures->findAll());
	    $this->loadView('picture/view', $this->data);
	}
	
	function update($id){
	    $this->data['picture'] = $this->Pictures->commentUpdate($id);
	    $this->redirect($this->buildLink('picture/view/'.$id));
	}
	function getPrevNext($aArray,$key){
	    $aKeys = array_keys($aArray); //every element of aKeys is obviously unique
	    $aIndices = array_flip($aKeys); //so array can be flipped without risk
	    $i = $aIndices[$key]; //index of key in aKeys
	    if ($i > 0) $prev = $aArray[$aKeys[$i-1]]; //use previous key in aArray
	    if ($i < count($aKeys)-1) $next = $aArray[$aKeys[$i+1]]; //use next key in aArray
	    if (!isset($prev)) $prev = end($aArray);
	    if (!isset($next)) $next = reset($aArray);
	    return array($prev,$next);  
	}
	
	function delete($id) {
	    $this->data['picture'] = $this->Pictures->find($id);
	    $this->data['pictures'] = $this->Pictures->findAll();
	    $picturesFound = count($this->Pictures->findAll());
	    unlink(PATH_FULL . '\\application\\front\\views\\templates\\main\\pictures\\' . $this->data['picture']['name']);
	    $prevNextPicture = $this->getPrevNext($this->data['pictures'], $id);
	    if(!empty($prevNextPicture[0])){
		$idnext = $prevNextPicture[0]['ID'];
	    } elseif (!empty($prevNextPicture[1])){
		$idnext = $prevNextPicture[1]['ID'];
	    } else {
		$this->redirect($this->buildLink('home/index'));
	    }
		$this->Pictures->remove($id);
		$this->redirect($this->buildLink('picture/view/'. $idnext));
	}
	
        function comment() {
	   
	    if($this->action){
		$this->Commentars->create($_POST['Commentars']);
		$this->update($_POST['Commentars']['picture_id']);
		$this->redirect($this->buildLink('picture/view/'. $_POST['Commentars']['picture_id']));
	    }
        }
	
	function upload(){
	    $this->loadView('picture/upload');
	}
	
	function uploadPicture(){
	    if($this->action){
		if (mb_strlen($_FILES['picture']['name'])>1 && mb_strlen($_FILES['picture']['tmp_name'])>5 ){
		    if(($_FILES['picture']['type'] == 'image/jpeg' || $_FILES['picture']['type'] == 'image/png' || $_FILES['picture']['type'] == 'image/jpg' || $_FILES['picture']['type'] =='image/gif' ) && $_FILES['picture']['size'] <= 20000000){
			$location= $this->path_template.'pictures/';
			$pic_random_name=rand(0, 100000);
			$new_picName = $pic_random_name.'-'.$_FILES['picture']['name'] ;
			$picture['name'] = $new_picName;
			$picture['user_id'] = $_SESSION['user'];
			$picture['text'] = $_POST['text'];
			$picture['comment_count'] = '0';
			move_uploaded_file($_FILES['picture']['tmp_name'] ,PATH_LOCATION. $location.$new_picName);
			$this->Pictures->create($picture);
			$this->redirect($this->buildLink('profile/view'));
		    } else {
			echo 'Error upload image';   
		    }
		    } else {
			echo 'error';
		    }
	    }
	}
    }