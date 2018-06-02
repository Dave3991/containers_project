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

    //$allContainers goes from index.php
    public function helloWorld($allContainers)
    {

        $pdo = $allContainers['databaseClient']->getBytype(\DatabaseClient\App\src\pdoContainerFactory::class)->createPdo($this->container);
        dump($pdo);
        echo "hello world";
    }

}