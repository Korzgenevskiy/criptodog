<?php

return[
    'account/login' => [
        'controller' => 'account',
        'action' => 'login',
    ],
    
    'account/register' => [
        'controller' => 'account',
        'action' => 'register',
    ],
    
    '' => [
        'controller' => 'main',
        'action' => 'index',
    ],
    'main' => [
        'controller' => 'main',
        'action' => 'index',
    ],
    'main/article' => [
        'controller' => 'main',
        'action' => 'article',
    ],
    'article/:id' => [
        'controller' => 'main',
        'action'     => 'article',
        ':id'        => '(\d{0,})',
    ],
    'article/:id:/:id2:/:id3:' => [
        'controller' => 'main',
        'action'     => 'article',
        ':id:'        => '(\d{0,})',
        ':id2:'        => '(\d{0,})',
        ':id3:'        => '(\d{0,})',
    ],
    'article' => [
        'controller' => 'main',
        'action'     => 'article',
    ],
    'contacts' => [
        'controller' => 'main',
        'action' => 'contacts',
    ],
];

