<?php
defined('TYPO3') or die('Access denied.');

// Import Flatpickr shortcut buttons for datetime field
if($_GET['edit'] ?? false) {
    $pageRenderer = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Page\PageRenderer::class);
    $pageRenderer->loadRequireJsModule('TYPO3/CMS/Typo3Datetimepicker/flatpickr/plugins/shortcut-buttons.min');
    $GLOBALS['TBE_STYLES']['skins']['typo3_datetimepicker']['stylesheetDirectories'][] = 'EXT:typo3_datetimepicker/stylesheets/flatpickr/';
}
