<?php

namespace ContainerKJZdRG2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssetMapper_Importmap_RemotePackageDownloaderService extends App_KernelProdContainer
{
    /*
     * Gets the private 'asset_mapper.importmap.remote_package_downloader' shared service.
     *
     * @return \Symfony\Component\AssetMapper\ImportMap\RemotePackageDownloader
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['asset_mapper.importmap.remote_package_downloader'] = new \Symfony\Component\AssetMapper\ImportMap\RemotePackageDownloader(($container->privates['asset_mapper.importmap.remote_package_storage'] ??= new \Symfony\Component\AssetMapper\ImportMap\RemotePackageStorage((\dirname(__DIR__, 4).'/assets/vendor'))), ($container->privates['asset_mapper.importmap.config_reader'] ?? $container->load('getAssetMapper_Importmap_ConfigReaderService')), ($container->privates['asset_mapper.importmap.resolver'] ?? $container->load('getAssetMapper_Importmap_ResolverService')));
    }
}
