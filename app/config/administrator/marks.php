<?php

return [

    'title' => 'Оцінки',
    'single' => 'Оцінка',
    'model' => 'Mark',

    'columns' => [
        'mark_id' => [
            'title' => 'ID'
        ],
        'mark' => [
            'title' => 'Оцінка',
        ],
        'user_id' => [
            'title' => 'ID користувача',
        ],
        'created_at',
    ],

    'edit_fields' => [
        'mark' => [
            'title' => 'Оцінка',
            'type' => 'text'
        ],

    ],

    'filters' => [
        'mark_id' => [
            'title' => 'ID'
        ],
        'mark' => [
            'title' => 'Оцінка',
        ],
        'user_id' => [
            'title' => 'ID користувача',
        ]
    ],
];
