<?php

namespace App\Controller;

use App\Entity\Vehicules;
use App\Repository\VehiculesRepository;
use DateTime;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    #[Route('/home', name: 'home')]


    public function index(ManagerRegistry $doctrine, VehiculesRepository $repo): Response
    {
        $Vehicules = $repo->findAll();

        return $this->render("home/index.html.twig", ["Vehicules" => $Vehicules]);
    }
}
