<?php

namespace App\Controller;

use App\Entity\FicheFrais;
use App\Form\FicheFraisType;
use App\Repository\FicheFraisRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/fiche/frais")
 */
class FicheFraisController extends AbstractController
{



    /**
     * @Route("/new", name="app_fiche_frais_new", methods={"GET", "POST"})
     */
    public function new(Request $request, FicheFraisRepository $ficheFraisRepository): Response
    {
        $ficheFrai = new FicheFrais();

       

        $form = $this->createForm(FicheFraisType::class, $ficheFrai);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $ficheFraisRepository->add($ficheFrai);
            return $this->redirectToRoute('consulter', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('fiche_frais/new.html.twig', [
            'fiche_frai' => $ficheFrai,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_fiche_frais_show", methods={"GET"})
     */
    public function show(FicheFrais $ficheFrai): Response
    {
        return $this->render('fiche_frais/show.html.twig', [
            'fiche_frai' => $ficheFrai,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_fiche_frais_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, FicheFrais $ficheFrai, FicheFraisRepository $ficheFraisRepository): Response
    {
        $form = $this->createForm(FicheFraisType::class, $ficheFrai);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $ficheFraisRepository->add($ficheFrai);
            return $this->redirectToRoute('renseigner', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('fiche_frais/edit.html.twig', [
            'fiche_frai' => $ficheFrai,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_fiche_frais_delete", methods={"POST"})
     */
    public function delete(Request $request, FicheFrais $ficheFrai, FicheFraisRepository $ficheFraisRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ficheFrai->getId(), $request->request->get('_token'))) {
            $ficheFraisRepository->remove($ficheFrai);
        }

        return $this->redirectToRoute('app_fiche_frais_index', [], Response::HTTP_SEE_OTHER);
    }
}
