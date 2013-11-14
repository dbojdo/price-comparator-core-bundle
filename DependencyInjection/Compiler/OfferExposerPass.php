<?php
namespace Webit\Bundle\PriceComparatorCoreBundle\DependencyInjection\Compiler;
use Symfony\Component\DependencyInjection\Definition;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;

class OfferExposerPass implements CompilerPassInterface {
    public function process(ContainerBuilder $container) {
        $this->registerExposers($container);
    }

    private function registerExposers(ContainerBuilder $container) {
        $provider = $container->getDefinition('webit_price_comparator_core.exposer_provider');
        $arIds = $container->findTaggedServiceIds('webit_price_comparator_core.offer_exposer');
        foreach($arIds as $id=>$tag) {
            if(isset($tag[0]['name']) == false || empty($tag[0]['name'])) {
                throw new \RuntimeException('Missing required tag attribute "name" for service "'.$id.'" tagged "webit_price_comparator_core.offer_exposer"');    
            }
            
            $name = $tag[0]['name'];
            $provider->addMethodCall('registerOfferExposer',array($container->getDefinition($id), $name));
        }
    }
}
