<?php

/**
 * Extension Manager/Repository config file for ext "theme".
 */
$EM_CONF['typo3_datetimepicker'] = [
    'title' => 'DateTimerPicker Extended',
    'description' => '',
    'category' => 'misc',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.34-11.5.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Daoued\\Typo3Datetimepicker\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Haythem Daoued',
    'author_email' => 'contact@haythemdaoud.net',
    'version' => '1.0.0',
];
