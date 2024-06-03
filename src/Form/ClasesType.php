<?php

namespace App\Form;

use App\Entity\Clases;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Controller\BuscadorController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Doctrine\ORM\EntityManagerInterface;

class ClasesType extends AbstractType
{
    
    
    private $entityManager;
    
    public function __construct( EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
       
    }
     
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $autores = $this->entityManager->getRepository(Clases::class)->findUniqueAutores();
        
        $final = $this->mergeadordearrays($autores);
        $builder
        ->add('Nombre', TextType::class, ['required' => false])
            ->add('Requisitos', TextType::class, ['required' => false])
            ->add('Competencias', TextType::class, ['required' => false])
            ->add('Salvaciones', ChoiceType::class, [
                    'choices' => [
                        'Fuerza' => 'Fuerza',
                        'Destreza' => 'Destreza',
                        'Constitución' => 'Constitución',
                        'Inteligencia' => 'Inteligencia',
                        'Sabiduría' => 'Sabiduría',
                        'Carisma' => 'Carisma',
                ],
                    'required' => false])
            ->add('Magia',ChoiceType::class, [
                'choices' => [
                    'No tiene hechizos' => '1',
                    'Lanzador Parcial' => '2',
                    'Lanzador Medio' => '3',
                    'Lanzador Puro' => '4',
                ],
                'required' => false])
                
            
            ->add('PuntosDeGolpe',ChoiceType::class, [
                'choices' => [
                    '1d4' => '1d4',
                    '1d6' => '1d6',
                    '1d8' => '1d8',
                    '1d10' => '1d10',
                    '1d12' => '1d12',
                ],
                'required' => false])
                ->add('Autor', ChoiceType::class, [
                    'choices' => $final,
                    'required' => false
                ])
            ->add('Enviar', SubmitType::class)
        ;
    }

    private function mergeadordearrays($array){
        $final = [];    
        foreach($array as $a){
            $final[$a['Autor']] = $a['Autor'];
        }
        return $final;
    }

    

    /*
     $form = $this->createFormBuilder()
            ->add('Nombre', TextType::class, ['required' => false])
            ->add('Requisitos', TextType::class, ['required' => false])
            ->add('Competencias', TextType::class, ['required' => false])
            ->add('Salvaciones', TextType::class, ['required' => false])
            ->add('PuntosDeGolpe',ChoiceType::class, [
                'choices' => [
                    '1d4' => '1d4',
                    '1d6' => '1d6',
                    '1d8' => '1d8',
                    '1d10' => '1d10',
                    '1d12' => '1d12',
                ],
                'required' => false])
            ->add('Autor', ChoiceType::class, [
                'choices' => array_flip($final),
                'required' => false
            ])
            ->add('save', SubmitType::class)
            ->getForm();
    */ 

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Clases::class,
        ]);
    }
}
