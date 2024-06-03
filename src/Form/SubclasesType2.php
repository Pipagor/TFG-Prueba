<?php

namespace App\Form;

use App\Entity\Clases;
use App\Entity\Subclases;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Doctrine\ORM\EntityManagerInterface;

class SubclasesType2 extends AbstractType
{
    private $entityManager;
    
    public function __construct( EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
       
    }
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $autores = $this->entityManager->getRepository(Subclases::class)->findUniqueAutores();
        $clases = $this->entityManager->getRepository(Clases::class)->FindClases();
        
        $final = $this->mergeadordearrays($autores);
        $final2 = $this->mergeador2($clases);
        $builder
            ->add('Nombre', TextType::class,)
            ->add('Requisitos', TextType::class, )
            ->add('Autor', TextType::class, ['required' => false])
            ->add('clase_id', ChoiceType::class, [
                'choices' => $final2,
                'label' => 'Clase',
                
            ])
            ->add('img', TextType::class, ['required' => false, 'label' => 'Imagen'])
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

    private function mergeador2($array){
        $final = [];
        $numero = 1;
        foreach($array as $a){
            $final[$a['Nombre']] = $numero;
            $numero++;
        }
        return $final;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Subclases::class,
        ]);
    }
}
