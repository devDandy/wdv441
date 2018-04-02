<?php
require_once('dataTest.class.php');

class Product extends DataTestBase
{
    public function loadProduct($productId)
    {        
        $productData = parent::loadData("product", "product_id", $productId);
        
        // do any product specific code
        
        return $productData;
    }
}
?>