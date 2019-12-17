<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Belsignum.' . $_EXTKEY,
	'Pi1',
	[
		'AgeVerification' => 'index',

	],
	// non-cacheable actions
	[
		// 'Product' => 'list', // use cache and submit form  as no cache
	]
);
