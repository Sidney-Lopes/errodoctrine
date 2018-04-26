<?php

return [
    'doctrine' => [
        'connection' => [
            'orm_default' => [
            'driverClass' => 'Doctrine\DBAL\Driver\PDOMySQL\Driver',
                'params' => [
                    'host' => 'localhost',
                    'port' => '3306',
                    'user' => 'root',
                    'password' => '371257',
                    'dbname' => 'zendexpressive',
                    'driverOptions' => [
                        \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"
	  	            ]
                ]
            ]
        ]
    ]
];
