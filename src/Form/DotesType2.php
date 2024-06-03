<?php

namespace App\Form;

use App\Entity\Dotes;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Controller\BuscadorController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Doctrine\ORM\EntityManagerInterface;

class DotesType2 extends AbstractType
{
    private $entityManager;
    
    public function __construct( EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
       
    }
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $autores = $this->entityManager->getRepository(Dotes::class)->findUniqueAutores();
        
        $final = $this->mergeadordearrays($autores);
        $builder
        ->add('Nombre', TextType::class,)
        ->add('Descripcion', TextType::class, )
        ->add('Requisitos', TextType::class, )
        ->add('Beneficios', TextType::class, )
       ->add('Autor', TextType::class,['required' => false])
       ->add('img', TextType::class,['required' => false, 'label' => 'Imagen'])
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

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Dotes::class,
        ]);
    }
}
