<?php

namespace App\Form;

use App\Entity\Trasfondo;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Controller\BuscadorController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Doctrine\ORM\EntityManagerInterface;

class TrasfondoType extends AbstractType
{
    private $entityManager;
    

    public function __construct( EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
       
    }
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
       
        $autores = $this->entityManager->getRepository(Trasfondo::class)->findUniqueAutores();
        $final = $this->mergeadordearrays($autores);
        $builder
        ->add('Nombre', TextType::class, ['required' => false])
        ->add('Origen', ChoiceType::class, [
            'choices' => [
                'Ocupación' => 'Ocupacion',
                'Origen' => 'Origen',
                        ],
            'required' => false
        ])
        ->add('Idiomas', ChoiceType::class, [
            'choices' => [
                
                'Común' => 'Común',
                'Orsfon' => 'Orsfon',
                'Élfico' => 'Élfico',
                'Hanafu' => 'Hanafu',
                'Ormius' => 'Ormius',
                'Draconido' => 'Draconido',
                'Trasgo' => 'Trasgo',
                'Nooru' => 'Nooru',
                ],
                
            'required' => false
        ])
        ->add('ObjetosIniciales', TextType::class, ['required' => false])
        ->add('Competencias', TextType::class, ['required' => false])
           
        ->add('Autor', ChoiceType::class, [
            'choices' => $final,
            'required' => false
        ])
            ->add('Plano', ChoiceType::class, [
                'choices' => [
                    
                    'Ninguno' => '0',
                    'Synfol' => 'Synfol',
                    ],
                    
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

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Trasfondo::class,
        ]);
    }
}

