<?php
class Commentars extends DB {

    function __construct() {
        $this->table = 'commentars';
        $this->primary = 'ID';
    }
}