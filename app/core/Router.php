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
    
    
    public function __construct() {
        $arr = require 'app/config/routes.php';
            foreach ($arr as $key => $val) {
            $this->add($key, $val);
        }
    }
    
    
    public function add($route,$params) {
        $route = '#^'.$route.'$#';
        $this->routes[$route] = $params;
    }
    
    public function match() {
        $url = trim($_SERVER['REQUEST_URI'], '/');
        $url = parse_url($url);
        if (!empty($url)) {
            $url = array_shift($url);    
            $url = trim($url, '/');
        } else {
            $url = '';
        }
        
        foreach ($this->routes as $route => $params){
            if (preg_match($route, $url, $matches)){
                $this->params = $params;
                return true;
            }
            
        }
        return false;
    }

    public function run() {
        if($this->match()){
        $path = 'app\controllers\\'.ucfirst($this->params['controller']).'Controller';
        if(class_exists($path)){
            $action = $this->params['action'].'Action';
            if (method_exists($path, $action)){
                $controller = new $path($this->params);
                $controller->$action();
            } else {
                echo 'Метод: '.$action.' не найден';
            }
        } else {
            echo 'Класс: '.$path.' не найден';
        }
            
    } else {
        echo 'Маршрут не найден';
    }

    
}
}