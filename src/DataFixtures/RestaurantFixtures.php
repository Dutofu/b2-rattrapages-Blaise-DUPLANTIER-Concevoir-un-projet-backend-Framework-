<?php

namespace App\DataFixtures;

use App\Entity\Restaurant;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class RestaurantFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $restaurant = new Restaurant();
        $restaurant->setName('Mongoo Paris');
        $restaurant->setLocation('Paris');
        $restaurant->setCreatedAt(new \DateTime());
        $restaurant->setUpdatedAt(new \DateTime());
        $manager->persist($restaurant);

        $manager->flush();
    }
}
