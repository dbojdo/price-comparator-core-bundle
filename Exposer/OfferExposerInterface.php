<?php
namespace Webit\PriceComparator\PriceComparatorCoreBundle\Exposer;

interface OfferExposerInterface {
    
    /**
     * 
     * @param string $format
     * @return \SplFileInfo
     */
    public function getOffersFile($format = 'xml');
    
    /**
     * @return array
     */
    public function getSupportedFormats();
}
