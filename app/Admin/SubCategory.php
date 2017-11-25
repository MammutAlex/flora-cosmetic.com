<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 25.11.17
 * Time: 15:15
 */
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(\App\SubCategory::class, function (ModelConfiguration $model) {
    $model->setTitle('Підкатегорії');
    // Display
    $model->onDisplay(function () {
        $display = AdminDisplay::table();
        $display->with('category');
        $display->setFilters(
            AdminDisplayFilter::related('category_id')->setModel(\App\Category::class)
        );
        $display->setColumns([
            AdminColumn::text('title')->setLabel('Назва'),
            AdminColumn::text('url')->setLabel('Посилання'),
            AdminColumn::text('category.name', 'Категрія')->append(AdminColumn::filter('category_id'))
        ]);
        return $display;
    });
    // Create And Edit
    $model->onCreateAndEdit(function () {
        $form = AdminForm::panel();
        $form->setItems(
            AdminFormElement::columns()
                ->addColumn(function() {
                    return [
                        AdminFormElement::text('title', 'Назва')->required(),
                        AdminFormElement::select('category_id', 'Категрія', \App\Category::class)->setDisplay('name')->required(),
                        AdminFormElement::text('url', 'Посилання')->required(),
                    ];
                })
        );

        return $form;
    });
});