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
            AdminColumn::text('title')->setLabel('Назва'),
            AdminColumn::text('text')->setLabel('Текст')
        ]);
        return $display;
    });
    // Create And Edit
    $model->onCreateAndEdit(function () {
        $form = AdminForm::panel()->addBody(
            AdminFormElement::text('name', 'Назва')->required(),
            AdminFormElement::wysiwyg('text', 'Текст')->required()
        );
        return $form;
    });
});