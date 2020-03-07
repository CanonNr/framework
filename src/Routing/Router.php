<?php
namespace Canon\Framework\Routing;

use Canon\Framework\Application;
use NoahBuscher\Macaw\Macaw;

class Router
{
    private $app;
    private $macaw;

    public function __construct($app)
    {
        $this->app = $app;
        $this->macaw = new Macaw();
    }

    public function CreateRouter()
    {
        $this->app->instance('router', $this->macaw);
        return $this->app->make('router');
    }
}