<?php
/**
 * Created by IntelliJ IDEA.
 * User: Dave
 * Date: 19.2.2018
 * Time: 21:36
 */
namespace Example\App\src;

use DatabaseClient\App\Src\databaseConnector;
use Nette\DI\Container;

class example
{

    protected $container;

    /**
     * Example constructor.
     */
    public function __construct(Container $container)
    {
        $this->container = $container;
        //$databaseClient = new databaseConnector($this->container);
    }

    public function helloWorld()
    {
        echo "hello world";
    }

}