<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 25.11.17
 * Time: 15:12
 */

use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(\App\Category::class, function (ModelConfiguration $model) {
    $model->setTitle('Категорії');
    // Display
    $model->onDisplay(function () {
        $display = AdminDisplay::table();
        $display->setColumns([
            AdminColumn::image('photo')->setLabel('Фото'),
            AdminColumn::text('name')->setLabel('Назва'),
            AdminColumn::text('url')->setLabel('Посилання')
        ]);
        return $display;
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