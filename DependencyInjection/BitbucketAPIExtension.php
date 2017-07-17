<?php
/**
 * Created by PhpStorm.
 * User: dpanzella
 * Date: 7/12/17
 * Time: 9:16 PM
 */

namespace DanielPanzella\BitbucketAPIBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class BitbucketAPIExtension extends Extension {

	public function load( array $configs, ContainerBuilder $container )
	{
		$loader = new YamlFileLoader(
			$container,
			new FileLocator(__DIR__.'/../Resources/config')
		);
		$loader->load('services.yml');

		$configuration = new Configuration();
		$config = $this->processConfiguration($configuration, $configs);

		$bitbucketServiceConfiguration = [
			"client_id" => $config['client_id'],
			"client_secret" => $config['client_secret']
		];

		$definition = $container->getDefinition('Bitbucket\API\Http\Listener\OAuth2Listener');
		$definition->replaceArgument(0, $bitbucketServiceConfiguration);

	}

}