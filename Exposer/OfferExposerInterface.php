<?php
namespace Webit\Bundle\PriceComparatorCoreBundle\Exposer;

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
