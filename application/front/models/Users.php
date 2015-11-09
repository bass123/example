<?php
class Users extends DB {

    function __construct() {
        $this->table = 'users';
        $this->primary = 'ID';
    }

    function login($user_name, $password) {
        $sql = "SELECT * from users WHERE user_name = '" . $user_name . "'  AND password = '" . $password . "'";
        return $this->query($sql,array('first' => true));
    }
    
    function findMyPics($id,$field = ''){
	    $sql = "SELECT u.*,p.name,p.ID pic_id FROM users u LEFT JOIN pictures p ON (u.ID = p.user_id) WHERE p.user_id = '" . $id . "' ORDER BY u.ID ASC";
	    return $this->query($sql);
    }
}