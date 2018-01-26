<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Article;

class MainController extends Controller {
    
    /**
     * 
     */
    public function indexAction(){
        $objectArticle = new Article();
        
      
        $this->view->render('Главная страница', [
            'articles' => $objectArticle->getArticles(),
        ]);
    }
    
    
    /**
     * 
     */
    public function articleAction(){
        $objectArticle = new Article();
        
         $this->view->render('Статья', [
            'articles' => $objectArticle->getArticle(),
        ]);
    }
    /**
     * 
     */
    public function contactsAction(){
        $this->view->render('Контакты');;
    }
    
}