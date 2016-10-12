<?php

namespace ConfigHelper\View\Helper;

use Zend\View\Helper\AbstractHelper;
use Zend\Config\Config as ZfConfig;

class StarterConfig extends AbstractHelper
{
    private $config;

    public function __construct(array $config)
    {
        $this->config = new ZfConfig($config);
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
