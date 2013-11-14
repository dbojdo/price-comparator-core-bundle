<?php

namespace Webit\PriceComparator\PriceComparatorCoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Webit\PriceComparator\PriceComparatorCoreBundle\Exposer\OfferExposerProviderInterface;

class ExposeController extends Controller
{
    
    /**
     * 
     * @var OfferExposerProviderInterface
     */
    protected $exposerProvider;
    
    public function __construct(OfferExposerProviderInterface $exposerProvider) {
        $this->exposerProvider = $exposerProvider;
    }
    
    public function exposeAction($comparator, $_format) {
        $exposer = $this->exposerProvider->getOfferExposer($comparator);
        if($exposer == null || in_array($_format, $exposer->getSupportedFormats()) == false) {
            throw $this->createNotFoundException('Unsupported comparator of format.');
        }
        
        $file = $exposer->getOffersFile($_format);
        $response = $this->createResponse($file, $_format);
        
        return $response;
    }
    
    private function createResponse(\SplFileInfo $file, $format) {
        $response = new Response();
        $response->setContent(file_get_contents($file->getPathname()));
        
        return $response;
    }
}
