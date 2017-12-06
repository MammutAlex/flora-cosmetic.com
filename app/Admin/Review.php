<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 25.11.17
 * Time: 15:12
 */

use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(\App\Review::class, function (ModelConfiguration $model) {
    $model->setTitle('Відгуки');
    // Display
    $model->onDisplay(function () {
        $display = AdminDisplay::table();
        $display->setColumns([
            AdminColumn::text('name')->setLabel('Ім`я'),
            AdminColumn::text('text')->setLabel('Текст')
        ]);
        return $display;
    });
    // Create And Edit
    $model->onCreateAndEdit(function () {
        $form = AdminForm::panel()->addBody(
            AdminFormElement::text('name', 'Ім`я')->required(),
            AdminFormElement::textarea('text', 'Текст')->required()
        );
        return $form;
    });
});