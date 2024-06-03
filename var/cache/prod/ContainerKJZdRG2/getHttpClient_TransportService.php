<?php

namespace ContainerKJZdRG2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHttpClient_TransportService extends App_KernelProdContainer
{
    /*
     * Gets the private 'http_client.transport' shared service.
     *
     * @return \Symfony\Contracts\HttpClient\HttpClientInterface
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['http_client.transport'] = $instance = \Symfony\Component\HttpClient\HttpClient::create([], 6);

        $a = new \Monolog\Logger('http_client');
        $a->pushHandler(($container->privates['monolog.handler.console'] ?? self::getMonolog_Handler_ConsoleService($container)));
        $a->pushHandler(($container->privates['monolog.handler.main'] ?? self::getMonolog_Handler_MainService($container)));

        $instance->setLogger($a);

        return $instance;
    }
}
