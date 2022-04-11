<?php

namespace App\Controller;

use App\Entity\FraisForfait;
use App\Form\FraisForfaitType;
use App\Repository\FraisForfaitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/frais/forfait")
 */
class FraisForfaitController extends AbstractController
{
    /**
     * @Route("/", name="app_frais_forfait_index", methods={"GET"})
     */
    public function index(FraisForfaitRepository $fraisForfaitRepository): Response
    {
        return $this->render('frais_forfait/index.html.twig', [
            'frais_forfaits' => $fraisForfaitRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_frais_forfait_new", methods={"GET", "POST"})
     */
    public function new(Request $request, FraisForfaitRepository $fraisForfaitRepository): Response
    {
        $fraisForfait = new FraisForfait();
        $form = $this->createForm(FraisForfaitType::class, $fraisForfait);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $fraisForfaitRepository->add($fraisForfait);
            return $this->redirectToRoute('app_frais_forfait_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('frais_forfait/new.html.twig', [
            'frais_forfait' => $fraisForfait,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_frais_forfait_show", methods={"GET"})
     */
    public function show(FraisForfait $fraisForfait): Response
    {
        return $this->render('frais_forfait/show.html.twig', [
            'frais_forfait' => $fraisForfait,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_frais_forfait_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, FraisForfait $fraisForfait, FraisForfaitRepository $fraisForfaitRepository): Response
    {
        $form = $this->createForm(FraisForfaitType::class, $fraisForfait);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $fraisForfaitRepository->add($fraisForfait);
            return $this->redirectToRoute('app_frais_forfait_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('frais_forfait/edit.html.twig', [
            'frais_forfait' => $fraisForfait,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_frais_forfait_delete", methods={"POST"})
     */
    public function delete(Request $request, FraisForfait $fraisForfait, FraisForfaitRepository $fraisForfaitRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$fraisForfait->getId(), $request->request->get('_token'))) {
            $fraisForfaitRepository->remove($fraisForfait);
        }

        return $this->redirectToRoute('app_frais_forfait_index', [], Response::HTTP_SEE_OTHER);
    }

}
