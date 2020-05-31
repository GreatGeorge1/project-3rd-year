<?php

return [

    'title' => 'Користувачі',
    'single' => 'Користувач',
    'model' => 'User',

    'columns' => [
        'user_id' => [
            'title' => 'ID'
        ],
        'fname' => [
            'title' => 'Ім\'я',
        ],
        'lname' => [
            'title' => 'Прізвище',
        ],
        'email' => [
            'title' => 'Email',
        ],
        'status' => [
            'title' => 'Роль',
        ]
        ,'faculty_number' => [
            'title' => 'Група',
        ],
        'created_at',
    ],

    'edit_fields' => [
        'fname' => [
            'title' => 'Ім\'я',
            'type' => 'text'

        ],
        'lname' => [
            'title' => 'Прізвище',
            'type' => 'text'

        ],
       'email' => [
            'title' => 'Email',
            'type' => 'text'
        ],
        'status' => [
            'title' => 'Роль',
            'type' => 'number'
        ]
        ,'faculty_number' => [
            'title' => 'Група',
            'type' => 'number'
        ],

    ],

    'filters' => [
        'fname' => [
            'title' => 'Ім\'я',
        ],
        'lname' => [
            'title' => 'Прізвище',
        ],
        'username' => [
            'title' => 'User Name',
        ],
        'email' => [
            'title' => 'Email',
        ],
        'status' => [
            'title' => 'Роль',
        ],
        'faculty_number' => [
            'title' => 'Група',
        ],
    ],
];
