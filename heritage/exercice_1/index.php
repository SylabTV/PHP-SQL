<?php

require_once 'User.php';
require_once 'Reader.php';

$reader = new Reader ("email@mail.com", "motdepass");

$reader->addBookToFavorites("livre A");
$reader->addBookToFavorites("livre B");

$reader->removeBookFromFavorites("livre A");

$reader->login();