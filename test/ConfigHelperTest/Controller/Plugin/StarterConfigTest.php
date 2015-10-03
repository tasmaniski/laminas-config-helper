<?php

namespace ConfigHelperTest\Controller\Plugin;

class StarterConfigTestTest extends \PHPUnit_Framework_TestCase
{

    public function testInstance()
    {

        $configHelper = new \ConfigHelper\Controller\Plugin\StarterConfig([]);

        $this->assertInstanceOf('Zend\Config\Config', $configHelper());
    }

    public function testGetKeyFromConfig()
    {
        $testConfig   = array('key_in_config' => 'value');
        $configHelper = new \ConfigHelper\Controller\Plugin\StarterConfig($testConfig);

        $this->assertEquals($testConfig['key_in_config'], $configHelper('key_in_config'));
        $this->assertEquals($testConfig['key_in_config'], $configHelper()->key_in_config);
    }

}