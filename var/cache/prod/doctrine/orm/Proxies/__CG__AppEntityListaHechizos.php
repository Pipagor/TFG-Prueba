<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ListaHechizos extends \App\Entity\ListaHechizos implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'clase_id' => [parent::class, 'clase_id', null],
        "\0".parent::class."\0".'hechizo_id' => [parent::class, 'hechizo_id', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        'clase_id' => [parent::class, 'clase_id', null],
        'hechizo_id' => [parent::class, 'hechizo_id', null],
        'id' => [parent::class, 'id', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
