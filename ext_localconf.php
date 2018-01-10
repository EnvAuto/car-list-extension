<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Envauto.CarList',
            'Listinformation',
            [
                'ListCar' => 'list, show'
            ],
            // non-cacheable actions
            [
                'ListCar' => ''
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    listinformation {
                        icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('car_list') . 'Resources/Public/Icons/user_plugin_listinformation.svg
                        title = LLL:EXT:car_list/Resources/Private/Language/locallang_db.xlf:tx_car_list_domain_model_listinformation
                        description = LLL:EXT:car_list/Resources/Private/Language/locallang_db.xlf:tx_car_list_domain_model_listinformation.description
                        tt_content_defValues {
                            CType = list
                            list_type = carlist_listinformation
                        }
                    }
                }
                show = *
            }
       }'
    );
    }
);
