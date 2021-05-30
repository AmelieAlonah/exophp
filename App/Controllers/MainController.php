<?php


class MainController extends CoreController
{

    public function home()
    {
        $productModel = new Product();
        $products = $productModel->findAll();

        $viewVars = [
            'products' => $products
        ];

        $this->show('home', $viewVars);
        
    }
  
}