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
     * @param array $data - данные для отображения
     */
    public function render(string $title, array $data = []) {
        ob_start();
        require 'app/views/'.$this->path.'.php';
        $content = ob_get_clean();
        require 'app/views/layouts/'.$this->layout.'.php';
        
    }
    
    public function getPath() {
        return $this->path;
    }
    
}
