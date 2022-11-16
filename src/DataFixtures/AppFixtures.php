<?php

namespace App\DataFixtures;

use App\Entity\Dessert;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 20; $i++) {
            $dessert = new Dessert();
            $dessert->setName('Choco Sundae '.$i);
            $dessert->setPrice(mt_rand(1, 3));
            $dessert->setDescription('This dessert is for chocolate lovers');
            $dessert->setQuantity(1);
            $manager->persist($dessert);
        }

        $manager->flush();
    }
}