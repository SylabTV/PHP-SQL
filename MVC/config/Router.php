<?php

require_once 'controllers/PageController.php';

class Router {
    
    public function __construct(){
        
    }
    
    public function handleRequest(array $get) : void{
        
       if (isset($get['route']) && $get['route'] === 'a-propos') {
            $controller = new PageController();
            $controller->about();
        } else if (!isset($get['route'])) {
            $controller = new PageController();
            $controller->home();
        } else if ($get['route'] === 'contact') {
            $controller = new PageController();
            $controller->contact();
        } else {
            $controller = new PageController();
            $controller->notFound();
        }
    }
    
}