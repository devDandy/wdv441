<?php
 	//Fatally errors if it doesn't exist
	// It'll check if it is already included
	// The class would already be defined after the first time. 
	require_once("DataTestBase.php");

	class Product extends DataTestBase
	{
		public function loadProduct($productId) 
		{
			$productData = parent::loadData("product", "product_id", "$productId");

			//Load data product 
			return $productData();
		}
	}
?>