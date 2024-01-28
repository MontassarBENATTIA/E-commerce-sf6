<?php

namespace ContainerHw4EyC8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDetailControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\DetailController' shared autowired service.
     *
     * @return \App\Controller\DetailController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'DetailController.php';

        $container->services['App\\Controller\\DetailController'] = $instance = new \App\Controller\DetailController(($container->privates['App\\Repository\\LigneDeCommandeRepository'] ?? $container->load('getLigneDeCommandeRepositoryService')), ($container->privates['App\\Repository\\CoordinateRepository'] ?? $container->load('getCoordinateRepositoryService')), ($container->services['doctrine'] ?? $container->getDoctrineService()));

        $instance->setContainer(($container->privates['.service_locator.qgC7ipw'] ?? $container->load('get_ServiceLocator_QgC7ipwService'))->withContext('App\\Controller\\DetailController', $container));

        return $instance;
    }
}
