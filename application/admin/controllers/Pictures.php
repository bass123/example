<?php
	class PicturesController extends admin {
	
		function __construct() {
			parent::__construct();
			$this->loadModel('Pictures');
		}
		
		function index() {
		    
		    $currentPage = $_GET['page'] ? $_GET['page'] : 1;
		    
		    $this->data['pictures'] = $this->Pictures->findAll('', array('page' => $currentPage));
		    
		    $this->loadView('pictures/index',$this->data);
		}
		
		function edit($id){
		    $this->data['picture'] = $this->Pictures->find($id);
		    $this->loadView('pictures/edit',$this->data);
		}
			
		function getCommentars($id){
		    $this->data['commentars'] = $this->Pictures->getComentars($id);
		    $this->data['pic_id'] = $id;
		    $this->loadView('commentars/index',$this->data);
		}
		
		function delete($id) {
			$this->Pictures->remove($id);
			$this->redirect($this->buildLink('pictures/index/'));
		}
		
		function uploadPicture($id){
	    if($this->action){
		if (mb_strlen($_FILES['picture']['name'])>1 && mb_strlen($_FILES['picture']['tmp_name'])>5 ){
		    
		    if(!empty($_FILES)){
		    if(($_FILES['picture']['type'] == 'image/jpeg' || $_FILES['picture']['type'] == 'image/png' || $_FILES['picture']['type'] == 'image/jpg' || $_FILES['picture']['type']		     =='image/gif' ) && $_FILES['picture']['size'] <= 20000000){
			$location= '\exercise\application\front\views\templates\main\pictures';
			$pic_random_name=rand(0, 100000);
			$new_picName = $pic_random_name.'-'.$_FILES['picture']['name'] ;
			$picture['name'] = $new_picName;
			$picture['user_id'] = $_SESSION['user'];
			$picture['text'] = $_POST['text'];
			$picture['comment_count'] = '0';
			echo $_FILES['picture']['tmp_name'] . '<br>';
			move_uploaded_file($_FILES['picture']['tmp_name'] ,PATH_LOCATION . $location.'\\'.$new_picName);
			$this->Pictures->save($picture,$id);
			$this->redirect($this->buildLink('pictures/index'));
		    } else {
			echo 'Error upload image';   
		    }
		    } else {
			echo 'error';
		}} else {
		    $this->Pictures->update('pictures',array('text'=>$_POST['text']),array('ID'=>$id));
		    $this->redirect($this->buildLink('pictures/edit/'.$id));
		}
		
	    }
		
	}
	}
