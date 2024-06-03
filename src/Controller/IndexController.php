<?php

namespace App\Controller;

use App\Entity\Clases;
use App\Entity\Dotes;
use App\Entity\Hechizos;
use App\Entity\Razas;
use App\Entity\Subclases;
use App\Entity\Subrazas;
use App\Entity\Trasfondo;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;



class IndexController extends AbstractController
{
    private $entityManager;
    
    public function __construct( EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
       
    }
    #[Route('/index', name: 'app_index')]
    public function index(): Response
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    #[Route('/clases', name: 'app_ok')]
    public function clases(): Response
    {
        $clases = $this->entityManager->getRepository(Clases::class)->FindAllValidated();
        return $this->render('buscador/ok.html.twig', [
            'resultado' => $clases
        ]);
    }

    #[Route('/subclases', name: 'app_ok_subclases')]
    public function subclases(): Response
    {
        $subclases = $this->entityManager->getRepository(Subclases::class)->FindAllValidated();
        return $this->render('buscador/ok_subclases.html.twig', [
            'resultado' => $subclases
        ]);
    }

    #[Route('/razas', name: 'app_ok_razas')]
    public function razas(): Response
    {
        $razas = $this->entityManager->getRepository(Razas::class)->FindAllValidated();
        return $this->render('buscador/ok_razas.html.twig', [
            'resultado' => $razas
        ]);
    }

    #[Route('/subrazas', name: 'app_ok_subrazas')]
    public function subrazas(): Response
    {
        $subrazas = $this->entityManager->getRepository(Subrazas::class)->FindAllValidated();
        return $this->render('buscador/ok_subrazas.html.twig', [
            'resultado' => $subrazas
        ]);
    }

    #[Route('/dotes', name: 'app_ok_dotes')]
    public function dotes(): Response
    {
        $dotes = $this->entityManager->getRepository(Dotes::class)->FindAllValidated();
        return $this->render('buscador/ok_dotes.html.twig', [
            'resultado' => $dotes
        ]);
    }

    #[Route('/trasfondos', name: 'app_ok_trasfondos')]
    public function trasfondos(): Response
    {
        $trasfondos = $this->entityManager->getRepository(Trasfondo::class)->FindAllValidated();
        return $this->render('buscador/ok_trasfondos.html.twig', [
            'resultado' => $trasfondos
        ]);
    }

    #[Route('/hechizos', name: 'app_ok_hechizos')]
    public function hechizos(): Response
    {
        $hechizos = $this->entityManager->getRepository(Hechizos::class)->FindAllValidated();
        return $this->render('buscador/ok_hechizos.html.twig', [
            'resultado' => $hechizos
        ]);
    }


}
