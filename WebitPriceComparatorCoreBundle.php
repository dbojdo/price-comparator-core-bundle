<?php



namespace Webit\PriceComparator\PriceComparatorCoreBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Webit\PriceComparator\PriceComparatorCoreBundle\DependencyInjection\Compiler\OfferExposerPass;


class WebitPriceComparatorCoreBundle extends Bundle
{
    public function build(ContainerBuilder $container) {
        parent::build($container);
        $container->addCompilerPass(new OfferExposerPass());
    }
}
