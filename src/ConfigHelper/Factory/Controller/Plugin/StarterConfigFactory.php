<?php

namespace ConfigHelper\Factory\Controller\Plugin;

use Interop\Container\ContainerInterface;
use ConfigHelper\Controller\Plugin\StarterConfig;

class StarterConfigFactory
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $config = $container->get('Config');

        return new StarterConfig($config);
    }

}
