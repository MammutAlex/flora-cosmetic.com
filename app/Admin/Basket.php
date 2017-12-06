<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 25.11.17
 * Time: 15:12
 */

use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(\App\Basket::class, function (ModelConfiguration $model) {
    $model->setTitle('Покупки')->setIcon('fa fa-shopping-basket');
    // Display
    $model->onDisplay(function () {
        $display = AdminDisplay::table();
        $display->setColumns([
            AdminColumn::text('name')->setLabel('Ім`я'),
            AdminColumn::text('phone')->setLabel('Телефон'),
            AdminColumn::text('comment')->setLabel('Коментарій'),
            AdminColumn::datetime('send')->setLabel('Дата подання заявки'),
        ]);
        return $display;
    });
});