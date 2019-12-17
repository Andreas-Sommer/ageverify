<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

// TypoScript Template
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/PagesToVerify', 'Secure Pages by age verification');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/VerificationPage', 'Verification Page');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'Belsignum.' . $_EXTKEY,
	'Pi1',
	'LLL:EXT:ageverify/Resources/Private/Language/locallang.xlf:tx_ageverify.pi1.title'
);

$extensionName = \TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($_EXTKEY);
// pi1 flexform: Verify
$pluginSignature = strtolower($extensionName) . '_pi1';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$pluginSignature] = 'layout,recursive,select_key,pages';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/Verify.xml');
