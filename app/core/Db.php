<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


namespace app\core;

/**
 * Description of DB
 *
 * @author VLADIMIR
 */
class Db {
    
    protected static $instance;

    protected $link;
    
    protected function __construct() {
       $config = require 'app/config/dbconfig.php';
        $this->link = mysqli_connect($config['host'],$config['user'],$config['dbpassword'],$config['dbname']);
    }
    
    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new Db();
        }
        
        return self::$instance;
    }

    public function fetchOne($sql) {
        
    }
    
    public function fetchArray($sql) {
        return mysqli_fetch_array($this->buildQuery($sql), MYSQLI_ASSOC);
    }
    
    public function fetchAll($sql) {
        return mysqli_fetch_all($this->buildQuery($sql), MYSQLI_ASSOC);
    }
    
    protected function buildQuery($sql) {
        return mysqli_query($this->link, $sql);
    }
    
}
