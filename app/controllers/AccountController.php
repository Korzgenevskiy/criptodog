<?php

namespace app\controllers;

/**
 * Аккаунт-Контроллер содержит экшины для действий с учетными записями
 * используетс пространство имен главного контроллера расположенного в ядре (core) 
 */
use app\core\Controller;

/**
 * класс AccountController наследуется от Controller расположенного а ядре (core) 
 */
class AccountController extends Controller 
    {
    
        /**
         * Экшен авторизации на сайте (loginAction)
         * возвращает объект авторизации
         * @return type
         */
        public function loginAction()
            {
            
                /**
                 * Возвращает вьюху авторизации
                 */
                return $this->view->render('Страница авторизации');
                
            }
            
        /**
         * Экшен регистрации на сайте (loginAction)
         * при вызове действия возвращает объект для авторизации на сайте
         * @return type
         */
        public function registrationAction()
            {
            
                /**
                 * Возвращает вьюху регистрации
                 */
                return $this->view->render('Страница реистрации');
        
            }
    
    }
