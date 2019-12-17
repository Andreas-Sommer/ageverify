<?php
$EM_CONF[$_EXTKEY] = array(
	'title' => 'Age Verify',
	'description' => 'Age verification - Redirect to page and checks the age and redirects back to referrer',
	'category' => 'plugin',
	'author' => 'Andreas Sommer',
	'author_email' => 'sommer@belsignum.com',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'clearCacheOnLoad' => 0,
	'version' => '1.0.0',
	'constraints' => array(
		'depends' => array(
			'typo3' => '6.2.0-6.2.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);
