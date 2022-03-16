<?php

namespace App\Controller;

use App\Entity\LigneFraisHorsForfait;
use App\Form\LigneFraisHorsForfaitType;
use App\Repository\LigneFraisHorsForfaitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/ligne/frais/hors/forfait")
 */
class LigneFraisHorsForfaitController extends AbstractController
{
    /**
     * @Route("/", name="app_ligne_frais_hors_forfait_index", methods={"GET"})
     */
    public function index(LigneFraisHorsForfaitRepository $ligneFraisHorsForfaitRepository): Response
    {
        return $this->render('ligne_frais_hors_forfait/index.html.twig', [
            'ligne_frais_hors_forfaits' => $ligneFraisHorsForfaitRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_ligne_frais_hors_forfait_new", methods={"GET", "POST"})
     */
    public function new(Request $request, LigneFraisHorsForfaitRepository $ligneFraisHorsForfaitRepository): Response
    {
        $ligneFraisHorsForfait = new LigneFraisHorsForfait();
        $form = $this->createForm(LigneFraisHorsForfaitType::class, $ligneFraisHorsForfait);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $ligneFraisHorsForfaitRepository->add($ligneFraisHorsForfait);
            return $this->redirectToRoute('app_ligne_frais_hors_forfait_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('ligne_frais_hors_forfait/new.html.twig', [
            'ligne_frais_hors_forfait' => $ligneFraisHorsForfait,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_ligne_frais_hors_forfait_show", methods={"GET"})
     */
    public function show(LigneFraisHorsForfait $ligneFraisHorsForfait): Response
    {
        return $this->render('ligne_frais_hors_forfait/show.html.twig', [
            'ligne_frais_hors_forfait' => $ligneFraisHorsForfait,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_ligne_frais_hors_forfait_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, LigneFraisHorsForfait $ligneFraisHorsForfait, LigneFraisHorsForfaitRepository $ligneFraisHorsForfaitRepository): Response
    {
        $form = $this->createForm(LigneFraisHorsForfaitType::class, $ligneFraisHorsForfait);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $ligneFraisHorsForfaitRepository->add($ligneFraisHorsForfait);
            return $this->redirectToRoute('app_ligne_frais_hors_forfait_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('ligne_frais_hors_forfait/edit.html.twig', [
            'ligne_frais_hors_forfait' => $ligneFraisHorsForfait,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_ligne_frais_hors_forfait_delete", methods={"POST"})
     */
    public function delete(Request $request, LigneFraisHorsForfait $ligneFraisHorsForfait, LigneFraisHorsForfaitRepository $ligneFraisHorsForfaitRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ligneFraisHorsForfait->getId(), $request->request->get('_token'))) {
            $ligneFraisHorsForfaitRepository->remove($ligneFraisHorsForfait);
        }

        return $this->redirectToRoute('app_ligne_frais_hors_forfait_index', [], Response::HTTP_SEE_OTHER);
    }
}
