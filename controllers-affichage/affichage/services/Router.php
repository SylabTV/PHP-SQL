<?php

require_once __DIR__ . "/../controllers/AbstractController.php";
require_once __DIR__ . "/../controllers/BlogController.php";

class Router {

    public function handleRequest() : void {

        $controller = new BlogController();

        if(empty($_GET["route"])) {

            $controller->index();

        } elseif($_GET["route"] === "article" && isset($_GET["id"])) {

            $controller->article($_GET["id"]);

        } else {

            $controller->notFound();
        }
    }
}