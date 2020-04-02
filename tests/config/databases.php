<?php

return [
    //Mysql
    'mysql' => [
        'dsn'      => 'mysql:host=127.0.0.1;dbname=kumbia_test;charset=utf8',
        'username' => 'root',
        'password' => '',
        'params'   => [
            \PDO::ATTR_PERSISTENT => \true, //conexión persistente
            \PDO::ATTR_ERRMODE    => \PDO::ERRMODE_EXCEPTION
        ]
    ],
    //Pgsql
    'pgsql' => [
        'dsn'      => 'pgsql:dbname=kumbia_test;host=localhost',
        'username' => 'postgres',
        'password' => '',
        'params'   => [
            \PDO::ATTR_PERSISTENT => \true, //conexión persistente
            \PDO::ATTR_ERRMODE    => \PDO::ERRMODE_EXCEPTION
            ]
    ],
    'sqlite' => [
        'dsn' => 'sqlite::memory:',
        'username' => '',
        'password' => '',
    ]


    //More connections
];
