<?php

namespace ContainerKJZdRG2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDotesType2Service extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\DotesType2' shared autowired service.
     *
     * @return \App\Form\DotesType2
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\DotesType2'] = new \App\Form\DotesType2(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)));
    }
}
