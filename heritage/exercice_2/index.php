<?php

require_once 'Character.php';
require_once 'Warrior.php';
require_once 'Mage.php';

$character = new Character();
$character->setName('King');
$character->setLife(300);



$warrior = new Warrior(150,"Kazma",100);

$mage = new Mage(100,"Omegazell",150);

echo $character->sayHello() . ", vie = " . $character->getLife() . "\n";
echo $warrior->sayHello() . ", vie = " . $warrior->getLife() . ", énergie = " . $warrior->getEnergy() . "\n";
echo $mage->sayHello() . ", vie = " . $mage->getLife() . ", mana = " . $mage->getMana() . "\n";