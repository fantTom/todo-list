<?php

namespace App\Config;

use App\Core\Interfaces\ConfigInterface;
use Symfony\Component\Config\FileLocator;

class Config implements ConfigInterface
{
    private $config = [];
    private $loader;
    private $locator;


    public function __construct($dir)
    {
        $directories = [
            BASEPATH . '/' . $dir
        ];
        $this->setLocator($directories);
        $this->setLoader();
    }

    public function addConfig($file)
    {
        $configVal = $this->loader->load($this->locator->Locate($file));
        if ($configVal) {
            foreach ($configVal as $key => $arr) {
                $this->config[$key] = $arr;
            }
        };

    }

    public function get($keyValue)
    {
        list($key, $value) = explode('.', $keyValue);

        if ($key && isset($this->config[$key])) {
            if ($value && $this->config[$key][$value]) {
                return $this->config[$key][$value];

            }
        } else {
            return $this->config[$key];
        }
        return null;
    }

    /**
     * @return array
     */
    public function getConfig()
    {
        return $this->config;
    }


    /**
     * @param mixed $loader
     */
    public function setLoader()
    {
        $this->loader = new YamlConfigLoader($this->locator);
    }

    /**
     * @param mixed $locator
     */
    public function setLocator($dir)
    {
        $this->locator = new FileLocator($dir);
    }


}