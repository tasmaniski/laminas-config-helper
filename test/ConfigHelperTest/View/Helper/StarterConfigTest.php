<?php

namespace ConfigHelperTest\View\Helper;

use ConfigHelperTest\Integration\Util\Bootstrap;

class StarterConfigTest extends \PHPUnit_Framework_TestCase
{
    public function testViewFactory()
    {
        $serviceManager      = Bootstrap::getServiceManager();
        $configHelperFactory = new \ConfigHelper\Factory\View\Helper\StarterConfigFactory();
        $configHelper        = $configHelperFactory->__invoke($serviceManager, '', []);

        $this->assertInstanceOf('ConfigHelper\View\Helper\StarterConfig', $configHelper);
    }

    public function testInstance()
    {
        $configHelper = new \ConfigHelper\View\Helper\StarterConfig([]);

        $this->assertInstanceOf('Laminas\Config\Config', $configHelper());
    }

    public function testGetKeyFromConfig()
    {
        $testConfig   = array('key_in_config' => 'value');
        $configHelper = new \ConfigHelper\View\Helper\StarterConfig($testConfig);

        $this->assertEquals($testConfig['key_in_config'], $configHelper('key_in_config'));
        $this->assertEquals($testConfig['key_in_config'], $configHelper()->key_in_config);
    }
}