<?php

/**
 * Содержит карту маршрутов проекта, представленную в виде ассоциативного массива
 * controller - имя котроллера
 * action - названия экшена (действия)
 * все наименования после названия контроллера и экшена - параметры 
 */
    return
    [
        'account/login' => 
        [
            'controller'    => 'account', 
            'action'        => 'login', 
        ], 
    
        'account/registration' => 
        [
        'controller' => 'account',
        'action'     => 'registration',
        ],
    
    '' => 
        [
        'controller' => 'main',
        'action'     => 'index',
        ], 
        
    'main' => 
        [
        'controller' => 'main',
        'action'     => 'index',
        ], 
        
    'main/article' => 
        [
        'controller' => 'main',
        'action'     => 'article',
        ],
        
    'article/:id' => 
        [
        'controller' => 'main',
        'action'     => 'article',
        ':id'        => '(\d{0,})',
        ],
        
    'article/:id:/:id2:' => 
        [
        'controller'   => 'main',
        'action'       => 'article',
        ':id:'         => '(\d{0,})',
        ':id2:'        => '(\d{0,})',
        ],
        
    'article' => 
        [
        'controller' => 'main',
        'action'     => 'article',
        ],
        
    'contacts' => 
        [
        'controller' => 'main',
        'action'     => 'contacts',
        ],
    
];

