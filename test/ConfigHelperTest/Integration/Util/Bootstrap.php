<?php

namespace ConfigHelperTest\Integration\Util;

use Laminas\Mvc\Service\ServiceManagerConfig;
use Laminas\ServiceManager\ServiceManager;

class Bootstrap
{
    /**
     * @var ServiceManager
     */
    private static $serviceManager;

    /**
     * @var array
     */
    private static $SERVICE_MANAGER_CONFIG = [
        'modules'                 => [
            'ConfigHelper',
        ],
        'module_listener_options' => [],
    ];

    /**
     * @return ServiceManager
     */
    public static function getServiceManager()
    {
        if (null === static::$serviceManager) {
            $smConfig = self::$SERVICE_MANAGER_CONFIG;

            $sm = new ServiceManager();
            $sm->setAllowOverride(true);
            (new ServiceManagerConfig())->configureServiceManager($sm);
            $sm->setService('ApplicationConfig', $smConfig);
            $sm->get('ModuleManager')->loadModules();

            static::$serviceManager = $sm;
        }

        return static::$serviceManager;
    }

}