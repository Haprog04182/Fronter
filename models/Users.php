<?php 



class Users extends Models{
    public function __construct() {
        parent::__construct();
        $this->table = "users";
    }
    public $table = "users";
}


?>