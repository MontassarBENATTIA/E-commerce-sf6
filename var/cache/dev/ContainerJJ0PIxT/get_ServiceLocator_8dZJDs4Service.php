<?php

namespace ContainerJJ0PIxT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8dZJDs4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.8dZJDs4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8dZJDs4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctirine' => ['services', 'doctrine', 'getDoctrineService', false],
        ], [
            'doctirine' => '?',
        ]);
    }
}
