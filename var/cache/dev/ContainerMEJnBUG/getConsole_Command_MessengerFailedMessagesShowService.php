<?php

namespace ContainerMEJnBUG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_MessengerFailedMessagesShowService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.messenger_failed_messages_show' shared service.
     *
     * @return \Symfony\Component\Messenger\Command\FailedMessagesShowCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'messenger'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'AbstractFailedMessagesCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'messenger'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'FailedMessagesShowCommand.php';

        $container->privates['console.command.messenger_failed_messages_show'] = $instance = new \Symfony\Component\Messenger\Command\FailedMessagesShowCommand('failed', ($container->privates['messenger.transport.failed'] ?? $container->load('getMessenger_Transport_FailedService')));

        $instance->setName('messenger:failed:show');

        return $instance;
    }
}
