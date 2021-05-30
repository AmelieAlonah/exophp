<?php


class CatalogController extends CoreController
{

    public function brand($params)
    {

        $brandId = $params['id'];

        $productsBrands = new Brand();
        $productsBrand = $productsBrands->find($brandId);

        $viewVars = [
            'brand_id' => $brandId,
            'productsByBrand' => $productsBrand,
        ];

        $this->show('brand', $viewVars);

    }


    public function product($params)
    {

        $productId = $params['id'];
        
        $viewVars = [
            'product_id' => $productId,
        ];

        $this->show('product', $viewVars);
        
    }

}