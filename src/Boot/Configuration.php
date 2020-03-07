<?php
namespace Canon\Framework\Boot;

use Dotenv\Dotenv;

class Configuration
{
    private $fileName;

    private $filePath;

    /**
     * LoadConfiguration constructor.
     * @param string $path
     * @param null $name
     */
    public function __construct($path = '../', $name = '.env')
    {
        $this->filePath = $path;
        $this->fileName = $name;
    }

    public function load()
    {
        try {
            Dotenv::createImmutable($this->filePath,$this->fileName)->load();
        }catch (\Exception $exception){
            exit(".configuration file not found");
        }
    }
}