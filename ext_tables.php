<?php
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/', 'Themes-Formhandler (Base - required!)');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Resources/Private/TypoScript/AppointmentRequest/', 'Themes-Formhandler (AppointmentRequest)');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Resources/Private/TypoScript/ContactAdvanced/', 'Themes-Formhandler (ContactAdvanced)');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Resources/Private/TypoScript/ContactAjaxAdvanced/', 'Themes-Formhandler (ContactAjaxAdvanced)');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Resources/Private/TypoScript/ContactAjaxBasic/', 'Themes-Formhandler (ContactAjaxBasic)');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Resources/Private/TypoScript/ContactBasic/', 'Themes-Formhandler (ContactBasic)');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Resources/Private/TypoScript/ContactMedium/', 'Themes-Formhandler (ContactMedium)');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Resources/Private/TypoScript/EstateSearch/', 'Themes-Formhandler (EstateSearch)');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Resources/Private/TypoScript/MasterTemplateTest/', 'Themes-Formhandler (MasterTemplateTest)');

if (TYPO3_MODE === 'BE') {
    $GLOBALS['TCA']['pages']['columns']['module']['config']['items'][] = array(
        0 => 'Contact-Form Subjects', //LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:news-folder',
        1 => 'tfsubject',
        2 => '../typo3conf/ext/themes_formhandler/Resources/Public/Icons/contactFormSubject.png'
    );
    \TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon('pages', 'contains-tfsubject', '../typo3conf/ext/themes_formhandler/Resources/Public/Icons/contactFormSubject.png');
}
