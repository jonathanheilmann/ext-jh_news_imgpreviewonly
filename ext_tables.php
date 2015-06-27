<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

$tmp_jh_news_imgpreviewonly_columns = array(

		'jh_news_imagepreviewonly' => array(
				'exclude' => 1,
				'label' => 'LLL:EXT:jh_news_imgpreviewonly/Resources/Private/Language/locallang_db.xlf:tx_jhnewsimgpreviewonly_domain_model_filereference.jh_news_imagepreviewonly',
				'config' => array(
						'type' => 'check',
						'default' => 0
				)
		),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('sys_file_reference',$tmp_jh_news_imgpreviewonly_columns);

// add special news palette
$GLOBALS['TCA']['sys_file_reference']['palettes']['newsPalette']['showitem'] .= ',jh_news_imagepreviewonly';