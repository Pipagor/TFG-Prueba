<?php

namespace ContainerKJZdRG2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getListaHechizosRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\ListaHechizosRepository' shared autowired service.
     *
     * @return \App\Repository\ListaHechizosRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\ListaHechizosRepository'] = new \App\Repository\ListaHechizosRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
