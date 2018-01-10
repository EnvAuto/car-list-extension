<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Envauto.CarList',
            'Listinformation',
            'ListInformation'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('car_list', 'Configuration/TypoScript', 'Car List');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_carlist_domain_model_listcar', 'EXT:car_list/Resources/Private/Language/locallang_csh_tx_carlist_domain_model_listcar.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_carlist_domain_model_listcar');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_carlist_domain_model_listmanufacturer', 'EXT:car_list/Resources/Private/Language/locallang_csh_tx_carlist_domain_model_listmanufacturer.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_carlist_domain_model_listmanufacturer');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_carlist_domain_model_listclass', 'EXT:car_list/Resources/Private/Language/locallang_csh_tx_carlist_domain_model_listclass.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_carlist_domain_model_listclass');

    }
);
