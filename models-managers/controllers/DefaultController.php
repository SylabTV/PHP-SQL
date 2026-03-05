<?php

require_once __DIR__ . '/../managers/UserManager.php';
require_once __DIR__ . '/../models/User.php';

class DefaultController extends AbstractController {

    public function index(): void {

        $userManager = new UserManager();
        $allUsers = $userManager->findAll();

        var_dump($allUsers);

        $this->render("index", []);
    }
}