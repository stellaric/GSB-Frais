<?php

namespace App\Form;

use App\Entity\FicheFrais;
use DateTime;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class FicheFraisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('mois',ChoiceType::class,array(
                'choices'=>array(
                    'Janvier' => 'janvier',
                    'Févier' => 'février',
                    'Mars' => 'mars',
                    'Avril' => 'avril',
                    'Mai' => 'mai',
                    'Juin' => 'juin',
                    'Juillet'=>'juillet',
                    'Août' =>'aout',
                    'Septembre'=>'septembre',
                    'Octobre'=>"octobre",
                    'Novembre'=>'novembre',
                    'Décembre'=>'decembre',
                ),
                'label'=>'Mois'
            ))


            ->add('nbJustificatifs')
            ->add('montantValide')
            ->add('dateModif')
            ->add('ligneFraisHorsForfait')
            ->add('etat')
            ->add('ligneFraisForfait')
          
                
            ;

        $builder->get('mois')
        ->addModelTransformer(new CallbackTransformer(
            function ($moisAsArray){
                return implode(',',$moisAsArray);
            },
            function ($moisAsString) {
                // transform the string back to an array
                return explode(', ', $moisAsString);
            }
        ))
    ;


    
        }
    
    
        
        
    

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => FicheFrais::class,
        ]);
    }
}
