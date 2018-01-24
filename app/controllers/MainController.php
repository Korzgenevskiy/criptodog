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
    public function articleAction($articleId = 1){
        $objectArticle = new Article();
        $articleId = $_GET['articleId'];
        
        
        
         $this->view->render('Статья', [
            'articles' => $objectArticle->getArticle($articleId),
        ]);
    }
    /**
     * 
     */
    public function contactsAction(){
        $this->view->render('Контакты');;
    }
    
}