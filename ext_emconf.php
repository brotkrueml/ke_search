<?php
/** @noinspection PhpUndefinedVariableInspection */
$EM_CONF[$_EXTKEY] = array(
    'title' => 'Faceted Search',
    'description' => 'Faceted fulltext search for TYPO3. Fast, flexible and easy to install and use. Indexes content directly from the databases. Features faceting / filtering, file indexing, images in result lists and respects access restrictions.',
    'category' => 'plugin',
    'shy' => 0,
    'version' => '4.3.1',
    'dependencies' => '',
    'conflicts' => '',
    'priority' => '',
    'loadOrder' => '',
    'module' => '',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'modify_tables' => '',
    'clearcacheonload' => 0,
    'lockType' => '',
    'author' => 'ke_search Dev Team',
    'author_email' => 'ke_search@tpwd.de',
    'author_company' => 'The People Who Do TPWD GmbH',
    'CGLcompliance' => '',
    'CGLcompliance_note' => '',
    'constraints' => array(
        'depends' => array(
            'typo3' => '10.4.11-11.5.99',
        ),
        'conflicts' => array(),
        'suggests' => array(
            'dashboard' => '10.4.11-11.5.99',
        ),
    ),
    'suggests' => array(),
    'autoload' => array(
        'psr-4' => array('Tpwd\\KeSearch\\' => 'Classes'),
        'classmap' => array('Classes'),
    ),
);
