<?php
defined('TYPO3') or die('Access denied.');

// Datetime Form Element
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][TYPO3\CMS\Backend\Form\Element\InputDateTimeElement::class] = [
    'className' => \Daoued\Typo3Datetimepicker\XClass\Backend\FormElement\InputDateTimeElement::class,
];
