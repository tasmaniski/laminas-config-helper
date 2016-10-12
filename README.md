# Zend Framework Config Helper
Simple and small lib. for reading a config content in all Controllers and all Views files.

## New version is here! You can use it in ZF3 

Add in your **composer.json** file: 

```json
{
    "require": {
        "tasmaniski/zend-config-helper": "^2.0"
    }
}
```
After running: *sudo composer update* 
You need to register new module. Add in file **config/application.config.php**: 

```
'modules' => array(
    '...',
    'ConfigHelper'
),
```
*Note: if you want to use it in ZF2 in composer.json add version ^1.0*


## Use
You can use it **in any of your controllers or view** files (including layout.phtml). 
First you have to add key in any of your config files (config/autoload/\*) eg. **"key_from_config"**

```
//read specific key registred in your config file.
$keyFromConfig = $this->configHelp('key_from_config');

// or in new version of PHP
$keyFromConfig = $this->configHelp()->key_from_config;
$keyFromConfig = $this->configHelp()['key_from_config']; // only for 5.4+

// this will read whole config
$config = $this->configHelp(); // return config object Zend\Config\Config
echo $config->key_from_config;
```





