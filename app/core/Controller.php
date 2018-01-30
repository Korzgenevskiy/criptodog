<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\core;

use app\core\View;

/**
 * Description of Controller
 *
 * @author VLADIMIR
 */
abstract class Controller {
    
    public $route;
    
    /**
     * @var View
     */
    public $view;
    
    protected $_params;


    public function __construct($route)
    {
        $this->_params = $route;
        $this->view = new View($route);
        
        //debug($this->_params);
        
    }
    
    
    /**
     * 
     * @param type $value
     * @param type $default
     */
    protected function _getParam($value, $default = null)
    {
        if (!empty($this->_params[':'.$value])) {
            return $this->_params[':'.$value];
        }
        
        return $default;
    }
    
}
