<?php
/**
 * Created by PhpStorm.
 * User: dpanzella
 * Date: 7/12/17
 * Time: 9:15 PM
 */

namespace DanielPanzella\BitbucketAPIBundle\DependencyInjection;


use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
	/**
	 * {@inheritdoc}
	 */
	public function getConfigTreeBuilder()
	{
		$treeBuilder = new TreeBuilder();
		$rootNode = $treeBuilder->root('bitbucket_api');

		$rootNode
			->children()
				->scalarNode('client_id')
					->defaultValue(NULL)
				->end()
				->scalarNode('client_secret')
					->defaultValue(NULL)
				->end()
			->end();

		return $treeBuilder;
	}

}