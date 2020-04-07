# Laminas MVC (Framework) Config Helper
Simple and small lib. for reading a config content in all Controllers and all Views files.

## Instalation 

Add in your **composer.json** file: 

```json
{
    "require": {
        "tasmaniski/laminas-config-helper": "^3.0"
    }
}
```
After running: *composer update* 
You need to register new module. Add in file **config/application.config.php**: 

```
'modules' => array(
    '...',
    'ConfigHelper'
),
```

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
$config = $this->configHelp(); // return config object Laminas\Config\Config
echo $config->key_from_config;
```





