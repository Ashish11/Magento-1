<?php

/**
 * Class Used to get the featured product from the 
 * catalog product and send response to the block
 * 
 * @category   Local
 * @package    SATech_Featuredproduct
 * @author     Ashish Ranade<ranade.ashish11@gmail.com>
 */


class SATech_Featuredproduct_Model_Featured 
    extends Mage_Core_Model_Abstract
{
    /**
     * Get the featured product
     * @return type
     */
    public function getFeaturedProduct()
    {
        $featured = Mage::getModel('catalog/product')
                    ->getCollection();
        $featured->addAttributeToFilter('is_featured', '1')
                    ->addAttributeToSelect(
                        array(
                            'name',
                            'price', 
                            'special_price',
                            'image'
                            )
                    )
                    ->setPageSize(4)
                    ->load();
        $featured->getSelect()->order(new Zend_Db_Expr('RAND()'));
        return $featured;
    }
    
}

