<?php

return [

    'title' => 'Питання',
    'single' => 'Питання',
    'model' => 'Question',

    'columns' => [
        'question_id' => [
            'title' => 'ID'
        ],
        'question_name' => [
            'title' => 'Питання',
        ],
        'exam_id' => [
            'title' => 'ID тесту',
        ],
        'created_at',
    ],

    'edit_fields' => [
        'question_name' => [
            'title' => 'Питання',
            'type' => 'text'
        ],
    ],

    'filters' => [
        'question_id' => [
            'title' => 'ID',
        ],
        'question_name' => [
            'title' => 'Питання',
        ],

    ],
];
