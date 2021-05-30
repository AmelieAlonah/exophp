<?php 


class CoreController 
{

    protected function show($viewName, $viewVars = [])
    {

        $baseUri = $_SERVER['BASE_URI'];
        
        global $router;

        $brandModel = new Brand();
        $brands = $brandModel->findAll();

        require __DIR__ . "/../Views/_header.tpl.php";
        require __DIR__ . "/../Views/{$viewName}.tpl.php";
        require __DIR__ . "/../Views/_footer.tpl.php";
        
    }

}