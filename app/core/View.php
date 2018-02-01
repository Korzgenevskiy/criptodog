<?php

namespace app\core;


class View
{

    public $path;
    public $route;
    public $layout = 'default';
    protected $_displayLayout = true;

    public function __construct($route)
    {
        $this->route = $route;
        $this->path = $route['controller'] . '/' . $route['action'];
    }

    /**
     * Рендер страницы
     *
     * @param string $title - title страницы
     * @param array $vars - данные для отображения
     */
    public function render(string $title, array $vars = [])
    {
        $smarty = new \Smarty();

        $fullPath = 'app/views/' . $this->path . '.tpl';
        if (file_exists($fullPath)) {
            // Страница
            $smartyPage = new \Smarty();
            foreach ($vars as $key => $value) {
                $smartyPage->assign($key, $value);
            }
            ob_start();
            $smartyPage->display($fullPath);

            // Layout
            ob_start();
            $content = ob_get_clean();
            if ($this->_displayLayout) {
                $smartyLayout = new \Smarty();
                $smartyLayout->assign('content', $content);
                $smartyLayout->display('app/views/layouts/' . $this->layout . '.tpl');

                return ob_get_clean();
            } else {
                return $content;
            }
        } else {
            return 'view not found' . $this->path;
        }
    }

    public function getPath()
    {
        return $this->path;
    }

    public static function errorCode($errorCodes)
    {
        http_response_code();
        $path = 'app/views/errors/' . $errorCodes . '.php';
        if (file_exists($path)) {
            require $path;
        }
        exit();
    }

    /**
     * @param bool $display
     */
    public function displayLayout($display = true)
    {
        $this->_displayLayout = $display;

        return $this;
    }

}
