<?php
namespace Webit\Bundle\PriceComparatorCoreBundle\Exposer;

interface OfferExposerInterface {
    
    /**
     * 
     * @param bool $refresh
     * @param string $format
     * @return \SplFileInfo
     */
    public function getOffersFile($refresh = false, $format = 'xml');
    
    /**
     * @return array
     */
    public function getSupportedFormats();
}
