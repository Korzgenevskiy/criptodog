<?php

namespace app\core;

use app\core\Db;

class Model {
    
    /**
     * @var Db
     */
    public $db;
    
    public function __construct() {        
        $this->db = Db::getInstance();
    }
    
}
