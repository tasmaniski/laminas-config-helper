<?php

namespace ConfigHelper\Factory\Controller\Plugin;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use \ConfigHelper\Controller\Plugin\StarterConfig;

class StarterConfigFactory implements FactoryInterface
{

    /**
     * @param ServiceLocatorInterface $serviceLocator
     *
     * @return SiteConfigHelper
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $config = $serviceLocator->getServiceLocator()->get('Config');

        return new StarterConfig($config);
    }

}
