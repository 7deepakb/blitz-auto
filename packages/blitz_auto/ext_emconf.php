<?php

/**
 * Extension Manager/Repository config file for ext "blitz_auto".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'blitz-auto',
    'description' => 'Car rental app',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
            'rte_ckeditor' => '8.7.0-9.5.99',
            'bootstrap_package' => '10.0.0-10.0.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'HofUniversity\\BlitzAuto\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'CDNV',
    'author_email' => 'deepak.balaram@hof-university.de',
    'author_company' => 'Hof University',
    'version' => '1.0.0',
];
