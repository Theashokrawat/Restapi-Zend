<?php
return array (
		'db' => array (
				'master' => array (
						'master1' => array (
								'driver' => 'Pdo',
								'username' => 'root',
								'password' => 'abc@123',
								'dsn' => 'mysql:dbname=hungry_buzz;host=localhost',
								'driver_options' => array (
										PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
								)
						)
				)

		)

);