<?php

namespace App\Controller;

use App\Entity\LigneFraisForfait;
use App\Form\LigneFraisForfaitType;
use App\Repository\LigneFraisForfaitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/ligne/frais/forfait")
 */
class LigneFraisForfaitController extends AbstractController
{
    /**
     * @Route("/", name="app_ligne_frais_forfait_index", methods={"GET"})
     */
    public function index(LigneFraisForfaitRepository $ligneFraisForfaitRepository): Response
    {
        return $this->render('ligne_frais_forfait/index.html.twig', [
            'ligne_frais_forfaits' => $ligneFraisForfaitRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_ligne_frais_forfait_new", methods={"GET", "POST"})
     */
    public function new(Request $request, LigneFraisForfaitRepository $ligneFraisForfaitRepository): Response
    {
        $ligneFraisForfait = new LigneFraisForfait();
        $form = $this->createForm(LigneFraisForfaitType::class, $ligneFraisForfait);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $ligneFraisForfaitRepository->add($ligneFraisForfait);
            return $this->redirectToRoute('app_ligne_frais_forfait_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('ligne_frais_forfait/new.html.twig', [
            'ligne_frais_forfait' => $ligneFraisForfait,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_ligne_frais_forfait_show", methods={"GET"})
     */
    public function show(LigneFraisForfait $ligneFraisForfait): Response
    {
        return $this->render('ligne_frais_forfait/show.html.twig', [
            'ligne_frais_forfait' => $ligneFraisForfait,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_ligne_frais_forfait_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, LigneFraisForfait $ligneFraisForfait, LigneFraisForfaitRepository $ligneFraisForfaitRepository): Response
    {
        $form = $this->createForm(LigneFraisForfaitType::class, $ligneFraisForfait);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $ligneFraisForfaitRepository->add($ligneFraisForfait);
            return $this->redirectToRoute('app_ligne_frais_forfait_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('ligne_frais_forfait/edit.html.twig', [
            'ligne_frais_forfait' => $ligneFraisForfait,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_ligne_frais_forfait_delete", methods={"POST"})
     */
    public function delete(Request $request, LigneFraisForfait $ligneFraisForfait, LigneFraisForfaitRepository $ligneFraisForfaitRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ligneFraisForfait->getId(), $request->request->get('_token'))) {
            $ligneFraisForfaitRepository->remove($ligneFraisForfait);
        }

        return $this->redirectToRoute('app_ligne_frais_forfait_index', [], Response::HTTP_SEE_OTHER);
    }
}
