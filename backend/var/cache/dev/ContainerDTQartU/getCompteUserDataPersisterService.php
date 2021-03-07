<?php

namespace ContainerDTQartU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCompteUserDataPersisterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\DataPersister\CompteUserDataPersister' shared autowired service.
     *
     * @return \App\DataPersister\CompteUserDataPersister
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataPersister/DataPersisterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataPersister/ContextAwareDataPersisterInterface.php';
        include_once \dirname(__DIR__, 4).'/src/DataPersister/CompteUserDataPersister.php';

        return $container->privates['App\\DataPersister\\CompteUserDataPersister'] = new \App\DataPersister\CompteUserDataPersister(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['security.password_encoder'] ?? $container->load('getSecurity_PasswordEncoderService')), ($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService')));
    }
}
