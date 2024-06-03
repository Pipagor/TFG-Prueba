<?php

namespace App\Form;

use App\Entity\Razas;
use App\Entity\Subrazas;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class SubrazasType2 extends AbstractType
{
    private $entityManager;
    
    public function __construct( EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
       
    }
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $autores = $this->entityManager->getRepository(Subrazas::class)->findUniqueAutores();
        $razas = $this->entityManager->getRepository(Razas::class)->FindRazas();
        
        $final = $this->mergeadordearrays($autores);
        $final2 = $this->mergeador2($razas);
        $builder
        ->add('Nombre', TextType::class,)
        ->add('Descripcion', TextType::class,)
        ->add('Fuerza', ChoiceType::class, [
                'choices' => [
                    '-1' => '-1',
                    '0' => '1',
                    '1' => '2',
                    '2' => '3',
                ],
               
            ])
            ->add('Destreza', ChoiceType::class, [
                'choices' => [
                    '-1' => '-1',
                    '0' => '1',
                    '1' => '2',
                    '2' => '3',
                ],
                
            ])
            ->add('Constitucion', ChoiceType::class, [
                'choices' => [
                    '-1' => '-1',
                    '0' => '1',
                    '1' => '2',
                    '2' => '3',
                ],
                
            ])
            ->add('Inteligencia', ChoiceType::class, [
                'choices' => [
                    '-1' => '-1',
                    '0' => '1',
                    '1' => '2',
                    '2' => '3',
                ],
                
            ])
            ->add('Sabiduria', ChoiceType::class, [
                'choices' => [
                    '-1' => '-1',
                    '0' => '1',
                    '1' => '2',
                    '2' => '3',
                ],
                
            ])
            ->add('Carisma', ChoiceType::class, [
                'choices' => [
                    '-1' => '-1',
                    '0' => '1',
                    '1' => '2',
                    '2' => '3',
                ],
               
            ])
            ->add('Autor', ChoiceType::class, [
                'choices' => $final,
                
            ])
            ->add('AtaqueDesarmado', TextType::class, )
          
            ->add('raza_id', ChoiceType::class, [
                'choices' => $final2,
                'label' => 'Raza',
               
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
            'data_class' => Subrazas::class,
        ]);
    }
}
