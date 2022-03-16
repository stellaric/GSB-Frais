<?php

namespace App\Controller;

use App\Entity\Visiteur;
use App\Form\VisiteurType;
use App\Repository\VisiteurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/visiteur")
 */
class VisiteurController extends AbstractController
{
    /**
     * @Route("/", name="app_visiteur_index", methods={"GET"})
     */
    public function index(VisiteurRepository $visiteurRepository): Response
    {
        return $this->render('visiteur/index.html.twig', [
            'visiteurs' => $visiteurRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_visiteur_new", methods={"GET", "POST"})
     */
    public function new(Request $request, VisiteurRepository $visiteurRepository): Response
    {
        $visiteur = new Visiteur();
        $form = $this->createForm(VisiteurType::class, $visiteur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $visiteurRepository->add($visiteur);
            return $this->redirectToRoute('app_visiteur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('visiteur/new.html.twig', [
            'visiteur' => $visiteur,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_visiteur_show", methods={"GET"})
     */
    public function show(Visiteur $visiteur): Response
    {
        return $this->render('visiteur/show.html.twig', [
            'visiteur' => $visiteur,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_visiteur_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Visiteur $visiteur, VisiteurRepository $visiteurRepository): Response
    {
        $form = $this->createForm(VisiteurType::class, $visiteur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $visiteurRepository->add($visiteur);
            return $this->redirectToRoute('app_visiteur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('visiteur/edit.html.twig', [
            'visiteur' => $visiteur,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_visiteur_delete", methods={"POST"})
     */
    public function delete(Request $request, Visiteur $visiteur, VisiteurRepository $visiteurRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$visiteur->getId(), $request->request->get('_token'))) {
            $visiteurRepository->remove($visiteur);
        }

        return $this->redirectToRoute('app_visiteur_index', [], Response::HTTP_SEE_OTHER);
    }
}
