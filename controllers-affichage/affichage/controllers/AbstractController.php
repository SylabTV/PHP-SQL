<?php

abstract class AbstractController {

    protected function render(string $template, array $data = []) : void {

        extract($data);

        require __DIR__ . "/../templates/layout.phtml";
    }

}