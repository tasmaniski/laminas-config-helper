<?php

namespace ConfigHelper\Factory\View\Helper;

use Interop\Container\ContainerInterface;
use ConfigHelper\View\Helper\StarterConfig;

class StarterConfigFactory
{

    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $config = $container->get('Config');

        return new StarterConfig($config);
    }

}
