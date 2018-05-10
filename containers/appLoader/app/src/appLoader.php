<?php

/**
 * Class appLoader
 * @desc ukolem je najit vsechny moduly (jejich bootstrapy) a ty vhodne ulozit a nasledne umet vratit
 */
namespace AppLoader\App\Src;
use Nette\DI\Container;
use Nette\Utils\Finder;
use Nette;
class appLoader {
    use Nette\SmartObject;
    /** @var array */
    protected $appModulesContainers = [];

    /** @var Container  */
    private $container;

    /**
     * appLoader constructor.
     * @param Container $container
     */
    public function __construct(Container $container)
    {
        $this->container = $container;
    }


    public function load(){  //
        $containerParams = $this->container->getParameters();
        $appModulesContainers = array();
        foreach (Finder::findFiles('bootstrap.php')->from($containerParams['appDir'] . '/../')->exclude(['*/vendor/*','appLoader','*/app/*']) as $key => $appModuleBootstrap) {
            $appModuleContainer = require $appModuleBootstrap->getRealPath();
            //nacteni paramtru z containeru
            $appModuleContainerParameters = $appModuleContainer->getParameters();
            //zjisteni jmena modulu dle config.neon
            $appModuleContainerName = $appModuleContainerParameters['module']['name'];
            $appModulesContainers[$appModuleContainerName] = $appModuleContainer;

        }
        $this->appModulesContainers = $appModulesContainers;
        return $appModulesContainers;
    }

    /**
     * @return mixed
     */
    public function getAppModulesContainers()
    {
        return $this->appModulesContainers;
    }

}