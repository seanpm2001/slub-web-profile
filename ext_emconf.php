<?php

$EM_CONF['slub_web_profile'] = [
    'title' => 'SLUB web profile',
    'description' => 'SLUB web profile extension for TYPO3',
    'category' => 'fe',
    'author' => 'Andreas Pfeiffer',
    'author_email' => 'andreas.pfeiffer@e-pixler.com',
    'author_company' => 'e-pixler',
    'shy' => '',
    'priority' => '',
    'module' => '',
    'state' => 'stable',
    'internal' => '',
    'modify_tables' => '',
    'clearCacheOnLoad' => 1,
    'lockType' => '',
    'version' => '0.1.0',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
