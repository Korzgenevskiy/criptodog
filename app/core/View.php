<?php

namespace app\core;
require 'app/lib/Smarty.class.php';

class View {
    
    public $path;
    public $route;
    public $layout = 'default';
    
    public function __construct($route){
        $this->route = $route;
        $this->path = $route['controller'].'/'.$route['action'];
        
    }
    
    /**
     * Рендер страницы
     * 
     * @param string $title - title страницы
     * @param array $vars - данные для отображения
     */
    public function render(string $title, array $vars = []) {
        extract($vars);
        
        if(file_exists('app/views/'.$this->path.'.php')){
            ob_start();
            require 'app/views/'.$this->path.'.php';
            $content = ob_get_clean();
            require 'app/views/layouts/'.$this->layout.'.php';
        } else {
            echo 'view not found'.$this->path;
        }
    }
    
    public function getPath() {
        return $this->path;
    }
    
    public static function errorCode($errorCodes) {
        http_response_code();
        $path = 'app/views/errors/'.$errorCodes.'.php';
        if (file_exists($path)){
            require $path;
        }
        exit();
    }
}
