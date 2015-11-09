<?php
class CommentarsController extends admin{
    
    function __construct() {
	parent::__construct();
	$this->loadModel('Commentars');
    }

    function deletePicCommentar($id) {
	$this->Commentars->remove($id);   
	if(!empty($_GET)){
            $this->redirect($this->buildLink('pictures/getCommentars/'.$_GET['pic'].''));
	} else {
	    $this->redirect($this->buildLink('pictures/index'));
        }
    }
    
     function deleteUserCommentar($id) {
	$this->Commentars->remove($id);   
	if(!empty($_GET)){
            $this->redirect($this->buildLink('users/getCommentars/'.$_GET['com'].''));
	} else {
	    $this->redirect($this->buildLink('users/index'));
        }
    }
    
}

