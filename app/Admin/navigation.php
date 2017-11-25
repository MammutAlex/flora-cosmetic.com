<?php

use SleepingOwl\Admin\Navigation\Page;

return [
    [
        'title' => 'Dashboard',
        'icon'  => 'fa fa-dashboard',
        'url'   => route('admin.dashboard'),
    ],
    [
        'title' => 'Продукти',
        'icon' => 'fa fa-cubes',
        'pages' => [
            (new Page(\App\Category::class))
                ->setPriority(0),
            (new Page(\App\SubCategory::class))
                ->setPriority(0),
            (new Page(\App\Product::class))
                ->setPriority(100)
        ]
    ],
];