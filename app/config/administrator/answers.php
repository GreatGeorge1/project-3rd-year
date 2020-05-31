<?php

return [

    'title' => 'Відповіді',
    'single' => 'Відповідь',
    'model' => 'Answer',

    'columns' => [
        'answer_id' => [
            'title' => 'ID'
        ],
        'answer_name' => [
            'title' => 'Відповідь',
        ],
        'created_at',
    ],

    'edit_fields' => [
       'answer_name' => [
            'title' => 'Відповідь',
            'type' => 'text'
        ],
    ],

    'filters' => [
        'answer_id' => [
            'title' => 'ID',
        ],
        'answer_name' => [
            'title' => 'Відповідь',
        ],
    ],
];
