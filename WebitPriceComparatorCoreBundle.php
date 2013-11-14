<?php



namespace Webit\Bundle\PriceComparatorCoreBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Webit\Bundle\PriceComparatorCoreBundle\DependencyInjection\Compiler\OfferExposerPass;


class WebitPriceComparatorCoreBundle extends Bundle
{
    public function build(ContainerBuilder $container) {
        parent::build($container);
        $container->addCompilerPass(new OfferExposerPass());
    }
}
