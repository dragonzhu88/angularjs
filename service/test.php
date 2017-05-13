<?php
/**
 * Created by PhpStorm.
 * User: dragon
 * Date: 2017/5/13
 * Time: 14:27
 */
$data = [
    'status' => 200,
    'msg' => 'ok',
    'rows' => [
        [
            'name' => 'ttt',
            'age' => 12,
        ],
        [
            'name' => 'yyy',
            'age' => 11,
        ],
        [
            'name' => 'zzz',
            'age' => 15,
        ],
    ]
];

echo json_encode($data);