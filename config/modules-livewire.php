<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Class Namespace
    |--------------------------------------------------------------------------
    |
    */

    'namespace' => 'Livewire',

    /*
    |--------------------------------------------------------------------------
    | View Path
    |--------------------------------------------------------------------------
    |
    */

    'view' => 'resources/views/livewire',

    /*
    |--------------------------------------------------------------------------
    | View namespaces for volt
    |--------------------------------------------------------------------------
    |
    */

    'volt_view_namespaces' => ['livewire', 'pages'],

    /*
    |--------------------------------------------------------------------------
    | Custom modules setup
    |--------------------------------------------------------------------------
    |
    */

    'custom_modules' => [
        'Chat' => [
            'name_lower' => 'chat',
            'path' => base_path('libraries/Chat'),
            'app_path' => 'src',
            'module_namespace' => 'Libraries\\Chat',
            'namespace' => 'Livewire',
            'view' => 'resources/views/livewire',
            'views_path' => 'resources/views',
            'volt_view_namespaces' => ['livewire', 'pages'],
        ],

        'Pos' => [
            'name_lower' => 'pos',
            'path' => base_path('libraries/Pos'),
            'app_path' => null,
            'module_namespace' => 'Libraries\\Pos',
            'namespace' => 'Livewire',
            'view' => 'resources/views/livewire',
            'views_path' => 'resources/views',
            'volt_view_namespaces' => ['livewire', 'pages'],
        ],

        'Seo' => [
            'name_lower' => 'seo',
            'path' => base_path('libraries/Seo'),
            'app_path' => 'app',
            'module_namespace' => 'Libraries\\Seo',
            'namespace' => 'Livewire',
            'view' => 'resources/views/livewire',
            'views_path' => 'resources/views',
            'volt_view_namespaces' => ['livewire', 'pages'],
        ],
    ],

];
