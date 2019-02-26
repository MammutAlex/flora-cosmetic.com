<?php

use SleepingOwl\Admin\Navigation\Page;

return [
    [
        'title' => 'Dashboard',
        'icon' => 'fa fa-dashboard',
        'url' => route('admin.dashboard'),
    ],
    (new Page(\App\Basket::class))
        ->setPriority(100),
    [
        'title' => 'Продукти',
        'icon' => 'fa fa-cubes',
        'pages' => [
            (new Page(\App\Category::class))
                ->setPriority(0),
            (new Page(\App\SubCategory::class))
                ->setPriority(0),
            (new Page(\App\Product::class))
                ->setPriority(100),
            (new Page(\App\ProductSort::class))
                ->setPriority(100)
        ]
    ],
    [
        'title' => 'Інформація',
        'icon' => 'fa fa-info',
        'pages' => [
            (new Page(\App\Delivery::class))
                ->setPriority(0),
            (new Page(\App\Contact::class))
                ->setPriority(100),
            (new Page(\App\Slider::class))
                ->setPriority(200),
            (new Page(\App\Review::class))
                ->setPriority(300)
        ]
    ],
];