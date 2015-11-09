<?php
class Pictures extends DB {

    function __construct() {
        $this->table = 'pictures';
        $this->primary = 'ID';
    }

    function getComentars($id,$field = ''){
	    $sql = "SELECT c.*,u.user_name, u.name,u.lastname FROM commentars c LEFT JOIN users u ON (u.ID = c.user_id) WHERE c.picture_id = '" . $id . "' ORDER BY c.ID ASC";
	    return $this->query($sql);
    }
    
    function commentUpdate($id, $field = '') {
	    $sql = "UPDATE pictures SET comment_count = comment_count + 1 WHERE " . $this->primary . " = '" . $id . "'";
	    return $this->query($sql, array('first' => true));
	}
    
}