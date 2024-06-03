<?php

namespace App\Form;

use App\Entity\Clases;
use App\Entity\Razas;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Controller\BuscadorController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Doctrine\ORM\EntityManagerInterface;

class RazasType2 extends AbstractType
{

    private $entityManager;
    
    public function __construct( EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
       
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $autores = $this->entityManager->getRepository(Razas::class)->findUniqueAutores();
        
        $final = $this->mergeadordearrays($autores);
        $builder
            ->add('Nombre', TextType::class, )
            ->add('Descripcion', TextType::class, )
            ->add('Fuerza', ChoiceType::class, [
                'choices' => [
                    '0' => '0',
                    '1' => '1',
                    '2' => '2',],
               
            ])
            ->add('Destreza', ChoiceType::class, [
                'choices' => [
                    '0' => '0',
                    '1' => '1',
                    '2' => '2',],
               
            ])
            ->add('Constitucion', ChoiceType::class, [
                'choices' => [
                    '0' => '0',
                    '1' => '1',
                    '2' => '2',],
               
            ])
            ->add('Inteligencia', ChoiceType::class, [
                'choices' => [
                    '0' => '1',
                    '1' => '2',
                    '2' => '3',],
                
            ])
            ->add('Sabiduria', ChoiceType::class, [
                'choices' => [
                    '0' => '0',
                    '1' => '1',
                    '2' => '2',],
                
            ])
            ->add('Carisma', ChoiceType::class, [
                'choices' => [
                    '0' => '0',
                    '1' => '1',
                    '2' => '2',],
               
            ])
            ->add('Autor', TextType::class, ['required' => false] )
            ->add('Velocidad', TextType::class,)
            ->add('AtaqueDesarmado', TextType::class,)
            ->add('img', TextType::class, ['label' => 'Imagen', 'required'=> false] )
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
            'data_class' => Razas::class,
        ]);
    }
}
