* Copy and paste the code in the current Magento installation folder to install the featured product module
* Login to admin panel catalog->manage products -> select product which you want to set as featured -> under general section you will see an input to set the product as featured.
* Navigate to cms -> home(Considering we need to display featured product on home page) to add the below code which will display featured product.
	{{block type="featuredproduct/featured" name="featured" as="featured" label="Featured Product" template="catalog/product/featured.phtml" }}
* you can use the same block code to show feature product at any page.