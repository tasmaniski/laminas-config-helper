<?php

namespace ConfigHelper\View\Helper;

use Laminas\View\Helper\AbstractHelper;
use Laminas\Config\Config as LaminasConfig;

class StarterConfig extends AbstractHelper
{
    private $config;

    public function __construct(array $config)
    {
        $this->config = new LaminasConfig($config);
    }

    public function __invoke($key = null)
    {
        if($key){
            return $this->config->$key;
        }
        else{
            return $this->config;
        }
    }

}
