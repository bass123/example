<?php
class Contacts extends DB {

    function __construct() {
        $this->table = 'contacts';
        $this->primary = 'ID';
    }
}