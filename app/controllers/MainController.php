<?php

namespace app\controllers;

/**
 * Клавный контроллер, содержит экшены действий главной странницы и статей
 * Использует пространство имен главного контроллера расположенного в дириктории ядра (core)
 * а также пространство имен модели Article для работы со статьями, расположенной в директории с моделями (models)
 */
use app\core\Controller;
use app\models\Article;

/**
 * класс MainController наследуется от Controller расположенного а ядре (core)
 */

class MainController extends Controller 
    {
    
        /**
         * Экшен главной страницы (indexAction)
         * Возвращает объект главной страницы
         */
        public function indexAction()
            {
        
            /**
             * Создает новый обеъкт класса модели статей (Article) 
             */
            $objectArticle = new Article();
            
            /**
             * возвращает представление главной страницы, 
             * используя метод модели для работы со статьями getArticles,
             * который возвращает весь список статей.
             * Функция displayLayout позволяет указать виджеты необходимые для отображения.
             */
            return $this->view->displayLayout()->render(
                'Главная страница', 
                ['articles' => $objectArticle->getArticles()]
            );
        }
    
        /**
         * Экшен станицы статьи
         * возвращает объект страницы статьи по номеру id страницы  
         */
        public function articleAction()
        {
            
            /**
             * присвает в переменную id текущее значение параметра id 
             */
            $id = $this->_getParam('id');
            /**
             * Создает новый обеъкт класса модели статей (Article) 
             */
            $objectArticle = new Article();
            /**
             * возвращает представление страницы статьи, 
             * используя метод модели для работы со статьями getArticle,
             * который возвращает статью по ее номеру $id.
             * Функция displayLayout позволяет указать виджеты необходимые для отображения.
             */
            return $this->view->displayLayout()->render(
                    'Статья', [
                    'articles' => $objectArticle->getArticle($id)]
                    );
        }
        
        /**
         * экшен страницы контактов
         */
        public function contactsAction()
        {
            /**
             * возвращает представление страницы контакты
             */
            return $this->view->render('Контакты');;
        }
    
}