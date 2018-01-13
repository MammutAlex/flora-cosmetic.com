<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 25.11.17
 * Time: 15:12
 */

use SleepingOwl\Admin\Model\ModelConfiguration;
use SleepingOwl\Admin\Display\Tree\OrderTreeType;

AdminSection::registerModel(\App\Category::class, function (ModelConfiguration $model) {
    $model->setTitle('Категорії');
    // Display
    $model->onDisplay(function () {
        return AdminDisplay::tree(OrderTreeType::class)->setValue('name');
    });
    // Create And Edit
    $model->onCreateAndEdit(function () {
        $form = AdminForm::panel()->addBody(
            AdminFormElement::text('name', 'Назва')->required(),
            AdminFormElement::image('photo', 'Фото')->required(),
            AdminFormElement::text('url', 'Посилання')->required()
        );
        return $form;
    });
});