<?php
namespace App\Config;

use Symfony\Component\Config\Loader\FileLoader;
use Symfony\Component\Yaml\Yaml;

class YamlConfigLoader extends FileLoader
{

    /**
     * @inheritDoc
     */
    public function load($resource, $type = null)
    {
        return Yaml::parse(file_get_contents($resource));
    }

    /**
     * @inheritDoc
     */
    public function supports($resource, $type = null)
    {
        return is_string($resource) && 'yaml' == pathinfo($resource, PATHINFO_EXTENSION);
    }
}