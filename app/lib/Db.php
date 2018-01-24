<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


namespace app\lib;

/**
 * Description of DB
 *
 * @author VLADIMIR
 */
class Db {
    
    protected static $instance;

    protected $link;
    
    protected function __construct() {
        $this->link = mysqli_connect("localhost", "root", "", 'blog');
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
    
    public function fetchRow($sql) {
        return mysqli_fetch_row($this->buildQuery($sql));
    }
    
    public function fetchAll($sql) {
        return mysqli_fetch_all($this->buildQuery($sql), MYSQLI_ASSOC);
    }
    
    protected function buildQuery($sql) {
        return mysqli_query($this->link, $sql);
    }
    
}
