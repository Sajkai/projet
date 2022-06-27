<?php

namespace ContainerZ42hTeB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVarDumper_Command_ServerDumpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'var_dumper.command.server_dump' shared service.
     *
     * @return \Symfony\Bundle\DebugBundle\Command\ServerDumpPlaceholderCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/debug-bundle/Command/ServerDumpPlaceholderCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Server/DumpServer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Command/Descriptor/DumpDescriptorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Command/Descriptor/CliDescriptor.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Command/Descriptor/HtmlDescriptor.php';

        $container->privates['var_dumper.command.server_dump'] = $instance = new \Symfony\Bundle\DebugBundle\Command\ServerDumpPlaceholderCommand(new \Symfony\Component\VarDumper\Server\DumpServer('', ($container->privates['logger'] ?? ($container->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger()))), ['cli' => new \Symfony\Component\VarDumper\Command\Descriptor\CliDescriptor(($container->privates['var_dumper.contextualized_cli_dumper.inner'] ?? $container->load('getVarDumper_ContextualizedCliDumper_InnerService'))), 'html' => new \Symfony\Component\VarDumper\Command\Descriptor\HtmlDescriptor(($container->privates['var_dumper.html_dumper'] ?? $container->getVarDumper_HtmlDumperService()))]);

        $instance->setName('server:dump');

        return $instance;
    }
}
