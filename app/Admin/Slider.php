<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 25.11.17
 * Time: 15:12
 */

use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(\App\Slider::class, function (ModelConfiguration $model) {
    $model->setTitle('Слайдер');
    // Display
    $model->onDisplay(function () {
        $display = AdminDisplay::table();
        $display->setColumns([
            AdminColumn::image('photo')->setLabel('Фото'),
            AdminColumn::text('title')->setLabel('Назва'),
            AdminColumn::text('text')->setLabel('Текст')
        ]);
        return $display;
    });
    // Create And Edit
    $model->onCreateAndEdit(function () {
        $form = AdminForm::panel()->addBody(
            AdminFormElement::text('title', 'Назва')->required(),
            AdminFormElement::select('type', 'Тип слайду', [
                '1'=>'Позиціонування по центрі білий тест',
                '2'=>'Позиціонування зверху чорний тест',
                '3'=>'Позиціонування з лівого боку чорний тест',
            ]),
            AdminFormElement::image('photo', 'Фото')->required(),
            AdminFormElement::text('text', 'Текст')->required()
        );
        return $form;
    });
});