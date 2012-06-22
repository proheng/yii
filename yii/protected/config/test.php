<?php

return CMap::mergeArray(
	require(dirname(__FILE__).'/main.php'),
	array(
		'components'=>array(
			'fixture'=>array(
				'class'=>'system.test.CDbFixtureManager',
			),

			'db'=>array(
				'connectionString' => 'mysql:host=127.0.0.1;dbname=test',
				'emulatePrepare' => true,
				'username' => 'debian-sys-maint',
				'password' => 'QFvqLCd75Y03b3tp',
				'charset' => 'utf8',
			)
			/* uncomment the following to provide test database connection
			'db'=>array(
				'connectionString'=>'DSN for test database',
			),
			*/
		),
	)
);
