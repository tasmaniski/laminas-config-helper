# ZF2 Config Helper
Simple and small lib. for reading a config content in all Controllers and all Views files.

## Install

Add to you **composer.json** file:

```json
{
    "require": {
        
        "tasmaniski/zf2-config-helper":"dev-master"
    }
}
```

You need to register new module. Add in file **config/application.config.php**: 

```
'modules' => array(
    '...',
    'ConfigHelper'
),
```

Voila! The module is ready to use. 

## Using in Controller or View
You can use it in any of your controllers or view files (including layout.phtml). 
First you have to add key in your config **"key_from_config"**. 
You can add it in any file in config/autoload/*

```
//read specific key registred in your config file.
$keyFromConfig = $this->configHelp('key_from_config');

// or in new version of PHP
$keyFromConfig = $this->configHelp()->key_from_config;

// this will read whole config
$config = $this->configHelp();
echo $config->key_from_config;
```





