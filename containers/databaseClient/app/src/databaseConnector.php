<?php
/**
 * Created by IntelliJ IDEA.
 * User: Dave
 * Date: 21.2.2018
 * Time: 21:20
 */

namespace DatabaseClient\App\Src;


use Nette\DI\Container;

class databaseConnector extends \Nette\Database\Connection
{
    protected $dsn;
    protected $user;
    protected $password;
    /**
     * databaseConnector constructor.
     */
    public function __construct(Container $container)
    {
        $containerParams = $container->getParameters();
        $this->dsn = $containerParams['database']['dsn'];
        $this->user = $containerParams['database']['user'];
        $this->password = $containerParams['database']['password'];
        parent::__construct($this->dsn,$this->user,$this->password);

    }

    public function exec(string $query):int{
        return $this->getPdo()->exec($query);
    }

}