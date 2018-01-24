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


    public function __construct($route){
        $this->route = $route;
        $this->view = new View($route);
        
    }
    
}
