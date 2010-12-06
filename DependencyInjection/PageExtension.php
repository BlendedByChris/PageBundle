<?php

namespace Bundle\PageBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

/**
 * Description of PageExtension
 *
 * @author cleblanc
 */
class PageExtension extends Extension {

    public function configLoad($config, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, __DIR__ . '/../Resources/config');
        $loader->load('model.xml');
    }
}
?>
