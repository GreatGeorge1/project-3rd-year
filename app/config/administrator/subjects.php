<?php

return [

    'title' => 'Предмети',
    'single' => 'Предмет',
    'model' => 'Subject',

    'columns' => [
        'subject_id' => [
            'title' => 'ID'
        ],
        'subject_name' => [
            'title' => 'Назва предмету',
        ],
        'created_at',
    ],

    'edit_fields' => [
        'subject_name' => [
            'title' => 'Назва предмету',
            'type' => 'text'
        ],
    ],

    'filters' => [
        'subject_id' => [
            'title' => 'ID',
        ],
        'subject_name' => [
            'title' => 'Назва предмету',
        ],
    ],
];
