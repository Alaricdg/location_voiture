<?php

namespace App\Controller;

use App\Entity\Vehicules;
use App\Form\AddVehiculeType;
use App\Repository\VehiculesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;



class VehiculesController extends AbstractController
{
    #[Route('/vehicules/new', name: 'vehicules_new')]
    public function index(Request $request, ManagerRegistry $doctrine): Response

    {
        $vehicules = new Vehicules();
        $form = $this->createForm(AddVehiculeType::class, $vehicules);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();
            $em->persist($vehicules);
            $em->flush();
            $this->addFlash("success", "Le vehicule a bien été enregistrée en base de données");
            return $this->redirectToRoute("home");
        }
        return $this->render('vehicules/index.html.twig', [
            "form" => $form->createView(),
            "title" => "créer un article",
            "btn" => "créer"
        ]);
    }
    #[Route("/vehicules/list", name: "vehicules_list")]
    public function listeCategorie(VehiculesRepository $repo): Response
    {

        $vehicules = $repo->findAll();

        //dd($repo->findByIdAndLabelActive(true));

        return $this->render("vehicules/liste.html.twig", ["vehicules" => $vehicules]);
    }

    #[Route("/vehicules/{id}", name: "vehicules_single")]

    public function showArticle(Vehicules $vehicule): Response
    {

        return $this->render("vehicules/single.html.twig", [
            "vehicule" => $vehicule
        ]);
    }

    #[Route("/vehicules/delete/{id}", name: "vehicule_delete")]
    public function deleteArticle($id, VehiculesRepository $repo, ManagerRegistry $doctrine): Response
    {

        $Vehicule = $repo->find($id);


        $em = $doctrine->getManager();
        $em->remove($Vehicule);
        $em->flush();
        $this->addFlash("success", "le vehicule $id a bien été supprimé");
        return $this->redirectToRoute("home");
    }
}
