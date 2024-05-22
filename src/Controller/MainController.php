<?php

namespace App\Controller;

use App\Repository\RestaurantRepository;
use App\Repository\EmployeeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/restaurants', name: 'restaurant_list')]
    public function listRestaurants(RestaurantRepository $restaurantRepository): Response
    {
        $restaurants = $restaurantRepository->findAll();
        return $this->render('main/restaurants.html.twig', [
            'restaurants' => $restaurants,
        ]);
    }

    #[Route('/employees', name: 'employee_list')]
    public function listEmployees(EmployeeRepository $employeeRepository): Response
    {
        $employees = $employeeRepository->findAll();
        return $this->render('main/employees.html.twig', [
            'employees' => $employees,
        ]);
    }
}
