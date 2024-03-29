<?php

namespace ContainerJJ0PIxT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductsControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ProductsController' shared autowired service.
     *
     * @return \App\Controller\ProductsController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ProductsController.php';

        $container->services['App\\Controller\\ProductsController'] = $instance = new \App\Controller\ProductsController(($container->privates['App\\Repository\\ProductRepository'] ?? $container->load('getProductRepositoryService')), ($container->privates['App\\Repository\\CategoryRepository'] ?? $container->load('getCategoryRepositoryService')), ($container->services['doctrine'] ?? $container->getDoctrineService()));

        $instance->setContainer(($container->privates['.service_locator.qgC7ipw'] ?? $container->load('get_ServiceLocator_QgC7ipwService'))->withContext('App\\Controller\\ProductsController', $container));

        return $instance;
    }
}
