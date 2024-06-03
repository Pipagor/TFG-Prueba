<?php

namespace App\Form;

use App\Entity\Hechizos;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Controller\BuscadorController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Doctrine\ORM\EntityManagerInterface;
class HechizosType extends AbstractType
{
    private $entityManager;
    
    public function __construct( EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
       
    }
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $autores = $this->entityManager->getRepository(Hechizos::class)->findUniqueAutores();
        
        $final = $this->mergeadordearrays($autores);
        $builder
            ->add('Nombre', TextType::class, ['required' => false])
            ->add('Nivel', ChoiceType::class, [
                'choices' =>  [
                    'Truco' => '0',
                    '1' => '1',
                    '2' => '2',
                    '3' => '3',
                    '4' => '4',
                    '5' => '5',
                    '6' => '6',
                    '7' => '7',
                    '8' => '8',
                    '9' => '9',
                ],
                'required' => false
            ])
            ->add('Escuela', ChoiceType::class, [
                'choices' => [
                    'Abjuración' => 'Abjuración',
                    'Conjuración' => 'Conjuración',
                    'Encantamiento' => 'Encantamiento',
                    'Evocación' => 'Evocación',
                    'Ilusión' => 'Ilusión',
                    'Nigromancia' => 'Nigromancia',
                    'Transmutación' => 'Transmutación',
                ],
                'required' => false
            ])
            ->add('TiempoDeEjecucion', TextType::class, ['required' => false])
            ->add('Rango', TextType::class, ['required' => false])
            ->add('Componentes', ChoiceType::class, [
                'choices' => [
                    'V' => 'V',
                    'S' => 'S',
                    'M' => 'M',
                    'V S' => 'V S',
                    'V M' => 'V M',
                    'S M' => 'S M',
                    'V S M' => 'V S M',
                ],
                'required' => false
            ])
            ->add('Duracion', ChoiceType::class, [
                'choices' => [
                    'Instantánea' => 'Instantánea',
                    '1 Minuto' => '1 Minuto',
                    '10 Minutos' => '10 Minutos',
                    '1 Hora' => '1 Hora',
                    '24 Horas' => '24 Horas',
                    'Permanente' => 'Permanente',
                ],
                'required' => false
            ])
            ->add('Zona_Efecto', ChoiceType::class, [
                'choices' => [
                    'Una Criatura' => 'Una Criatura',
                    'Área' => 'Área',
                ],
                'required' => false
            ])
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

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Hechizos::class,
        ]);
    }
}

