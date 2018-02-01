<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Article;

class MainController extends Controller {
    
    /**
     * 
     */
    public function indexAction()
    {
        $objectArticle = new Article();

        return $this->view->displayLayout()->render('Главная страница', [
            'articles' => $objectArticle->getArticles(),
        ]);
    }
    
    
    /**
     * 
     */
    public function articleAction()
    {
        $id = $this->_getParam('id');
        
        $objectArticle = new Article();
         $this->view->render('Статья', [
            'articles' => $objectArticle->getArticle($id),
        ]);
    }
    /**
     * 
     */
    public function contactsAction()
    {
        $this->view->render('Контакты');;
    }
    
}