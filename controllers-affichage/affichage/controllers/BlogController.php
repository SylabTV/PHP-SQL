<?php

class BlogController extends AbstractController {

    public function index() : void {

        require __DIR__ . "/../data/data-articles.php";

        $this->render("blog", [
            "articles" => $articles
        ]);
    }

    public function article($id) : void {

        require __DIR__ . "/../data/data-articles.php";

        if(isset($articles[$id])) {
            $this->render("article", [
                "article" => $articles[$id]
            ]);
        } else {
            $this->notFound();
        }
    }

    public function notFound() : void {
        $this->render("notFound");
    }
}