<?php

namespace App\DataFixtures;

use App\Entity\Employee;
use App\Entity\Restaurant;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class EmployeeFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $repository = $manager->getRepository(Restaurant::class);
        $restaurant = $repository->findOneByName('Mongoo Paris');

        $employee = new Employee();
        $employee->setName('John Doe');
        $employee->setEmail('john.doe@example.com');
        $employee->setActive(true);
        $employee->setCreatedAt(new \DateTime());
        $employee->setUpdatedAt(new \DateTime());
        $employee->setRestaurant($restaurant);
        $manager->persist($employee);

        $manager->flush();
    }
}
