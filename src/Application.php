<?php
namespace Canon\Framework;

use Illuminate\Container\Container;

class Application extends Container
{

    /**
     * @var string
     */
    private $version = "开发中";


    public function __construct()
    {
        $container = Container::getInstance();
        $container->bind(Animal::class);

    }

    /**
     * 获取版本号
     * @return mixed
     */
    public function getVersion()
    {
        return $this->version;
    }
}