<?php

namespace ContainerD5w5KGi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MWNDzqtService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.mWNDzqt' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.mWNDzqt'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'params' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'userProvider' => ['privates', 'security.user.provider.concrete.app_user_provider', 'getSecurity_User_Provider_Concrete_AppUserProviderService', true],
        ], [
            'params' => '?',
            'userProvider' => '?',
        ]);
    }
}
