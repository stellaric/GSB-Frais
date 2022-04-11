<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;
use App\Entity\FicheFrais;
use App\Repository\FicheFraisRepository;

class FiltreExtension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            
            new TwigFilter('filtre_mois', [$this, 'mois']),
        ];
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('filtre_mois', [$this, 'mois']),
        ];
    }

    public function filterMois(FicheFraisRepository $mois )
    {

        return $mois ;
    }
}

