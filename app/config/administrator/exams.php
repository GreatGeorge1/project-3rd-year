<?php

return [

    'title' => 'Тести',
    'single' => 'Тест',
    'model' => 'Exam',

    'columns' => [
        'exam_id' => [
            'title' => 'ID'
        ],
        'exam_name' => [
            'title' => 'Назва',
        ],
        'exam_time' => [
            'title' => 'Час проходження тесту',
        ],
        'questions_count' => [
            'title' => 'Кількість питань',
        ]
        ,
        'time_per_question' => [
            'title' => 'Час на одне питання(хв)',
        ],
        'teacher_id' => [
            'title' => 'ID викладача',
        ],
        'created_at',
    ],

    'edit_fields' => [
        'exam_name' => [
            'title' => 'Назва',
            'type' => 'text',
        ],
        'questions_count' => [
            'title' => 'Кількість питань',
            'type' => 'number',
        ],
        'time_per_question' => [
            'title' => 'Час на одне питання(хв)',
            'type' => 'number',
        ],
        'teacher_id' => [
            'title' => 'ID викладача',
            'type' => 'number',
        ],

    ],

    'filters' => [
        'exam_id' => [
            'title' => 'ID',
        ],
        'exam_name' => [
            'title' => 'Назва',
        ],
        'teacher_id' => [
            'title' => 'ID викладача',
        ],
    ],
    'rules' => [
        'exam_name' => 'required|min:2|max:52|unique:exams,exam_name',
        'questions_count' => 'required|integer|numeric|between:5,120',
        'time_per_question' => 'required|integer|numeric|between:1,20',
    ],
];
