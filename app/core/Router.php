<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\core;

/**
 * Description of router
 *
 * @author VLADIMIR
 */
class Router {
    
    protected $routes =[];
    protected $params =[];        
    
    
    public function __construct() 
    {
        $arr = require 'app/config/routes.php';
            foreach ($arr as $key => $val) {
            $this->_add($key, $val);
            
            
        }
        
    }
    
    
    protected function _add($route, $params) 
    {
        foreach ($params as $key => $value) {
            
            if (0 === strpos($key, ':')) {
                
                $route = str_replace($key, $value, $route);
                
                
            }
        }
                $route = '#^'.$route.'$#';
        $this->routes[$route] = $params;
        
    }
    
    
    
    protected function _match() 
    {
        $url = trim($_SERVER['REQUEST_URI'], '/');
        $url = parse_url($url);
        if (!empty($url)) {
            $url = array_shift($url);    
            $url = trim($url, '/');
        } else {
            $url = '';
        }
        
        foreach ($this->routes as $route => $params){
            if (preg_match($route, $url, $matches)) {
                
                $paramNumber = 1;
                foreach ($params as $key => &$param) {
                    if (0 === strpos($key, ':')) {
                        $param = $matches[$paramNumber];
                        $paramNumber++;
                    }
                    
                    
                }
                
                $this->params = $params;
                return true;
            }
            
        }
        
        return false;
        
    }

    public function run() 
    {
        if($this->_match()) {
            $path = 'app\controllers\\'.ucfirst($this->params['controller']).'Controller';
            if(class_exists($path)){
                $action = $this->params['action'].'Action';
                
                if (method_exists($path, $action)){
                    $controller = new $path($this->params);
                    $controller->$action();
                } else {
                    View::errorCode(404);
                }
            } else {
                View::errorCode(404);;
            }

        } else {
            View::errorCode(404);;
        }
        
    }
}