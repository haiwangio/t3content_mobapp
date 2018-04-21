<?php

# Extension Manager/Repository config file for ext: "t3content_mobapp"

$EM_CONF[$_EXTKEY] = [
    'title' => 'TYPO3 Content - MobApp',
    'description' => 'This extension provides flux content elements for the t3cms theme mobapp',
    'category' => 'templates',
    'author' => 'Salvatore Eckel',
    'author_email' => 'salvaracer@gmx.de',
    'state' => 'stable',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '2.2.1',
    'constraints' => [
        'depends' => [
            'typo3' => '7.6.18-8.99.99',
        ],
        'conflicts' => [],
        'suggests' => [
            't3content_mobapp' => '2.2.1',
        ],
    ],
];
