<?php
namespace Canon\Framework;

use Illuminate\Container\Container;
use Canon\Framework\Routing\Router;

class Application extends Container
{

    /**
     * @var string
     */
    private $version = "开发中";

    /**
     * @var 
     */
    public $router;

    public function __construct()
    {
        static::setInstance($this);
        $this->instance('app', $this);
        $this->instance(self::class, $this);
        
        $this->bootstrapRouter();
    }

    public function bootstrapRouter()
    {
        $this->router = new Router($this);
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