<?php

namespace ConfigHelperTest\Controller\Plugin;

use ConfigHelperTest\Integration\Util\Bootstrap;

class StarterConfigTestTest extends \PHPUnit_Framework_TestCase
{
    public function testControllerFactory()
    {
        $serviceManager      = Bootstrap::getServiceManager();
        $configHelperFactory = new \ConfigHelper\Factory\Controller\Plugin\StarterConfigFactory();
        $configHelper        = $configHelperFactory->createService($serviceManager->get('controllerpluginmanager'));

        $this->assertInstanceOf('ConfigHelper\Controller\Plugin\StarterConfig', $configHelper);
    }

    public function testInstance()
    {
        $testConfig   = array('key_in_config' => 'value');
        $configHelper = new \ConfigHelper\Controller\Plugin\StarterConfig($testConfig);

        $this->assertInstanceOf('Laminas\Config\Config', $configHelper());
    }

    public function testGetKeyFromConfig()
    {
        $testConfig   = array('key_in_config' => 'value');
        $configHelper = new \ConfigHelper\Controller\Plugin\StarterConfig($testConfig);

        $this->assertEquals($testConfig['key_in_config'], $configHelper('key_in_config'));
        $this->assertEquals($testConfig['key_in_config'], $configHelper()->key_in_config);
    }
}