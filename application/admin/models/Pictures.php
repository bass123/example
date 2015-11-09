<?php
class Pictures extends DB {

    function __construct() {
        $this->table = 'pictures';
        $this->primary = 'ID';
    }

    function getComentars($id,$field = ''){
	    $sql = "SELECT c.*,u.user_name,u.email_address FROM commentars c LEFT JOIN pictures p ON (p.ID = c.picture_id) LEFT JOIN users u ON (p.user_id = u.ID) WHERE c.picture_id =  '" . $id . "' ORDER BY c.ID DESC";
	    return $this->query($sql);
    }
    
    function commentUpdate($id, $field = '') {
	    $sql = "UPDATE pictures SET comment_count = comment_count + 1 WHERE " . $this->primary . " = '" . $id . "'";
	    return $this->query($sql, array('first' => true));
	}
    
}