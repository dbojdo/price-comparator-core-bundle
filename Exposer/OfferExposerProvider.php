<?php
namespace Webit\Bundle\PriceComparatorCoreBundle\Exposer;

class OfferExposerProvider implements OfferExposerProviderInterface {

    /**
     * 
     * @var array
     */
    private $exposers = array();
    
    /**
     *
     * @param string $name
     * @return OfferExposerInterface
     */
    public function getOfferExposer($name) {
        if(isset($this->exposers[$name])) {
            return $this->exposers[$name];
        }
        
        return null;
    }
    
    /**
     *
     * @param OfferExposerInterface $exposer
     */
    public function registerOfferExposer(OfferExposerInterface $exposer, $name) {
        $this->exposers[$name] = $exposer;
    }
}
