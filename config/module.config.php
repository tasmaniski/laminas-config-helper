<?php

return array(
    'view_helpers' => array(
        'factories' => array(
            'configHelp' => 'ConfigHelper\Factory\View\Helper\StarterConfigFactory',
        ),
    ),
    'controller_plugins' => array(
        'factories' => array(
            'configHelp' => 'ConfigHelper\Factory\Controller\Plugin\StarterConfigFactory',
        ),
    ),
);
