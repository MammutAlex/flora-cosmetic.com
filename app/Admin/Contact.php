<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 25.11.17
 * Time: 15:12
 */

use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(\App\Contact::class, function (ModelConfiguration $model) {
    $model->setTitle('Контактні дані');
    // Display
    $model->onDisplay(function () {
        $display = AdminDisplay::table();
        $display->setColumns([
            AdminColumn::text('text')->setLabel('Текст')
        ]);
        return $display;
    });
    // Create And Edit
    $model->onCreateAndEdit(function () {
        $form = AdminForm::panel()->addBody(
            AdminFormElement::wysiwyg('text', 'Текст')->required()
        );
        return $form;
    });
});