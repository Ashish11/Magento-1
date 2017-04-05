<?php

/**
 * Class Used to get the featured product from the 
 * catalog product and display into the frontend
 * 
 * @category   Local
 * @package    SATech_Featuredproduct
 * @author     Ashish Ranade<ranade.ashish11@gmail.com>
 */


class SATech_Featuredproduct_Block_Featured 
    extends Mage_Core_Block_Template
{
    /**
     * Get the enable featured product
     * @return type
     */
    public function getFeaturedProduct()
    {
        return Mage::getModel('featuredproduct/featured')->getFeaturedProduct();
    }
    
    /**
     * Calculate the product rating
     * @param type $productId
     * @return type
     */
    public function getProductRatings($productId)
    {
        $ratings = 0;
        $rating = Mage::getModel('rating/rating')->getEntitySummary($productId);
        $sum = $rating->getSum();
        $count = $rating->getCount();
        
        if ((isset($sum) && !empty($sum)) 
                && isset($count) && !empty($count)
            ) {
            $ratings = $sum / $count;
        }  
        
        return $ratings;
    }
    
    /**
     * Get checkout cart url
     * @param type $productId
     * @return type
     */
    public function getCartUrl($productId)
    {
        $_product = Mage::getModel('catalog/product')->load($productId);
        $_url = Mage::helper('checkout/cart')->getAddUrl($_product);
        
        return $_url;
    }
}

