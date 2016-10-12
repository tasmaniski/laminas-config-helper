<?php

return [
    'view_helpers'       => [
        'factories' => [
            'configHelp' => ConfigHelper\Factory\View\Helper\StarterConfigFactory::class,
        ],
    ],
    'controller_plugins' => [
        'factories' => [
            'configHelp' => ConfigHelper\Factory\Controller\Plugin\StarterConfigFactory::class,
        ],
    ],
];
