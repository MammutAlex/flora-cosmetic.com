<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 25.11.17
 * Time: 15:15
 */
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(\App\Product::class, function (ModelConfiguration $model) {
    $model->setTitle('Продукти');
    // Display
    $model->onDisplay(function () {
        $display = AdminDisplay::table();
        $display->with('category');
        $display->setFilters(
            AdminDisplayFilter::related('sub_category_id')->setModel(\App\SubCategory::class)
        );
        $display->setColumns([
            AdminColumn::image('photo')->setLabel('Фото'),
            AdminColumn::text('title')->setLabel('Назва'),
            AdminColumn::text('small_description')->setLabel('Короткий опис'),
            AdminColumnEditable::checkbox('show')->setLabel('Активний'),
            AdminColumn::text('category.title', 'Категрія')->append(AdminColumn::filter('sub_category_id'))
        ]);
        return $display;
    });
    // Create And Edit
    $model->onCreateAndEdit(function () {
        $form = AdminForm::panel();
        $form->setItems(
            AdminFormElement::columns()
                ->addColumn(function () {
                    return [
                        AdminFormElement::text('title', 'Назва')->required(),
                        AdminFormElement::select('sub_category_id', 'Категрія', \App\SubCategory::class)->setDisplay('title')->required(),
                        AdminFormElement::image('photo', 'Обкладинка')->required(),
                        AdminFormElement::images('images', 'Фотографії')->required(),
                        AdminFormElement::text('small_description', 'Коротке описання')->required(),
                        AdminFormElement::checkbox('show', 'Активний'),
                        AdminFormElement::wysiwyg('description', 'Повний опис')->required(),
                    ];
                })
        );
        $form->setItems(
            AdminFormElement::columns()
                ->addColumn(function () {
                    return [
                        AdminFormElement::text('config_1', 'Назва конфігурації 1')->required(),
                    ];
                })
                ->addColumn(function () {
                    return [
                        AdminFormElement::number('price_1', 'Ціна конфігурації 1')->required(),
                    ];
                })
        )->setItems(
            AdminFormElement::columns()
                ->addColumn(function () {
                    return [
                        AdminFormElement::text('config_2', 'Назва конфігурації 2'),
                    ];
                })
                ->addColumn(function () {
                    return [
                        AdminFormElement::number('price_2', 'Ціна конфігурації 2'),
                    ];
                })
        )->setItems(
            AdminFormElement::columns()
                ->addColumn(function () {
                    return [
                        AdminFormElement::text('config_3', 'Назва конфігурації 3'),
                    ];
                })
                ->addColumn(function () {
                    return [
                        AdminFormElement::number('price_3', 'Ціна конфігурації 3'),
                    ];
                })
        )->setItems(
            AdminFormElement::columns()
                ->addColumn(function () {
                    return [
                        AdminFormElement::text('config_4', 'Назва конфігурації 4'),
                    ];
                })
                ->addColumn(function () {
                    return [
                        AdminFormElement::number('price_4', 'Ціна конфігурації 4'),
                    ];
                })
        )->setItems(
            AdminFormElement::columns()
                ->addColumn(function () {
                    return [
                        AdminFormElement::text('config_5', 'Назва конфігурації 5'),
                    ];
                })
                ->addColumn(function () {
                    return [
                        AdminFormElement::number('price_5', 'Ціна конфігурації 5'),
                    ];
                })
        );
        return $form;
    });
});