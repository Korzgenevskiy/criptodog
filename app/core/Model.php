<?php

namespace app\core;

use app\lib\Db;

class Model {
    
    /**
     * @var Db
     */
    public $db;
    
    public function __construct() {        
        $this->db = Db::getInstance();
    }
    
}
