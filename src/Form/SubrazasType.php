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

class SubrazasType extends AbstractType
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
        ->add('Nombre', TextType::class, ['required' => false])
        ->add('Fuerza', ChoiceType::class, [
                'choices' => [
                    '-1' => '-1',
                    '0' => '1',
                    '1' => '2',
                    '2' => '3',
                ],
                'required' => false
            ])
            ->add('Destreza', ChoiceType::class, [
                'choices' => [
                    '-1' => '-1',
                    '0' => '1',
                    '1' => '2',
                    '2' => '3',
                ],
                'required' => false
            ])
            ->add('Constitucion', ChoiceType::class, [
                'choices' => [
                    '-1' => '-1',
                    '0' => '1',
                    '1' => '2',
                    '2' => '3',
                ],
                'required' => false
            ])
            ->add('Inteligencia', ChoiceType::class, [
                'choices' => [
                    '-1' => '-1',
                    '0' => '1',
                    '1' => '2',
                    '2' => '3',
                ],
                'required' => false
            ])
            ->add('Sabiduria', ChoiceType::class, [
                'choices' => [
                    '-1' => '-1',
                    '0' => '1',
                    '1' => '2',
                    '2' => '3',
                ],
                'required' => false
            ])
            ->add('Carisma', ChoiceType::class, [
                'choices' => [
                    '-1' => '-1',
                    '0' => '1',
                    '1' => '2',
                    '2' => '3',
                ],
                'required' => false
            ])
            ->add('Autor', ChoiceType::class, [
                'choices' => $final,
                'required' => false
            ])
            ->add('AtaqueDesarmado', TextType::class, ['required' => false])
          
            ->add('raza_id', ChoiceType::class, [
                'choices' => $final2,
                'label' => 'Raza',
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
