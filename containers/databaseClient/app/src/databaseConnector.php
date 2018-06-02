<?php
/**
 * Created by IntelliJ IDEA.
 * User: Dave
 * Date: 21.2.2018
 * Time: 21:20
 */

namespace DatabaseClient\App\src;


use Nette\DI\Container;

class pdoContainerFactory
{
    protected $dsn = "";
    protected $user = "";
    protected $password = "";
    protected $pdo = null;


    public function exec(string $query):int{
        return $this->pdo->exec($query);
    }

    public function createPdo(Container $container)
    {
        $containerParams = $container->getParameters();
        $this->dsn = $containerParams['database']['dsn'];
        $this->user = $containerParams['database']['user'];
        $this->password = $containerParams['database']['password'];
//        $this->dsn = $dsn;
//        $this->user = $user;
//        $this->password = $password;

        return new \Nette\Database\Connection($this->dsn,$this->user, $this->password);
    }

}