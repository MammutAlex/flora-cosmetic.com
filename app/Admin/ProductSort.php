<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 25.11.17
 * Time: 15:12
 */

use SleepingOwl\Admin\Model\ModelConfiguration;
use SleepingOwl\Admin\Display\Tree\OrderTreeType;

AdminSection::registerModel(\App\ProductSort::class, function (ModelConfiguration $model) {
    $model->setTitle('Сортування товарів');
    // Display
    $model->onDisplay(function () {
        return AdminDisplay::tree(OrderTreeType::class)->setValue('title');
    });
});