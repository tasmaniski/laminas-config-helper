<?php

namespace ConfigHelper\Controller\Plugin;

use Zend\Mvc\Controller\Plugin\AbstractPlugin;
use Zend\Config\Config;

class StarterConfig extends AbstractPlugin
{
    private $config;

    public function __construct(array $config)
    {
        $this->config = new Config($config);
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
