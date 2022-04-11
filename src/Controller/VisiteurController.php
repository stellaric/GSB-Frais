<?php

namespace App\Controller;

use App\Entity\FicheFrais;
use App\Form\FicheFraisType;
use App\Repository\FicheFraisRepository;
use App\Repository\VisiteurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\HttpFoundation\Response;


class VisiteurController extends AbstractController
{
    
    public function index(VisiteurRepository $visiteur, FicheFraisRepository $ficheFrais ): Response
    {
        
        return $this->render('visiteur/index.html.twig', [
            'controller_name' => 'VisiteurController',
            'visiteur' => $visiteur->findAll(),
            'fiche_frais' => $ficheFrais->findAll(),
        ]);
    }

   
    public function consulter(VisiteurRepository $visiteur , FicheFraisRepository $ficheFrais ): Response
    {

        

        return $this->render('visiteur/consulter.html.twig', [
            'controller_name' => 'VisiteurController',
            'visiteur' => $visiteur->findAll(),
            'fiche_frais' => $ficheFrais->findAll(),
          
        ]);
    }

    public function renseigner(VisiteurRepository $visiteur, FicheFraisRepository $ficheFrais): Response
    {
     
        return $this->render('visiteur/renseigner.html.twig', [
            'controller_name' => 'VisiteurController',
            'visiteur' => $visiteur->findAll(),
            'fiche_frais' => $ficheFrais->findAll(),
        ]);
    }


}
