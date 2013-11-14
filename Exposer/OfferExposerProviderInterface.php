<?php
namespace Webit\PriceComparator\PriceComparatorCoreBundle\Exposer;

interface OfferExposerProviderInterface {
    
    /**
     * 
     * @param string $name
     * @return OfferExposerInterface
     */
    public function getOfferExposer($name);
    
    /**
     * 
     * @param OfferExposerInterface $exposer
     */
    public function registerOfferExposer(OfferExposerInterface $exposer);
}