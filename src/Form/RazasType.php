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

class RazasType extends AbstractType
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
            ->add('Nombre', TextType::class, ['required' => false])
            ->add('Fuerza', ChoiceType::class, [
                'choices' => [
                    '0' => '0',
                    '1' => '1',
                    '2' => '2',],
                'required' => false
            ])
            ->add('Destreza', ChoiceType::class, [
                'choices' => [
                    '0' => '0',
                    '1' => '1',
                    '2' => '2',],
                'required' => false
            ])
            ->add('Constitucion', ChoiceType::class, [
                'choices' => [
                    '0' => '0',
                    '1' => '1',
                    '2' => '2',],
                'required' => false
            ])
            ->add('Inteligencia', ChoiceType::class, [
                'choices' => [
                    '0' => '1',
                    '1' => '2',
                    '2' => '3',],
                'required' => false
            ])
            ->add('Sabiduria', ChoiceType::class, [
                'choices' => [
                    '0' => '0',
                    '1' => '1',
                    '2' => '2',],
                'required' => false
            ])
            ->add('Carisma', ChoiceType::class, [
                'choices' => [
                    '0' => '0',
                    '1' => '1',
                    '2' => '2',],
                'required' => false
            ])
            ->add('Autor', ChoiceType::class, [
                'choices' => $final,
                'required' => false
            ])
            ->add('Velocidad', TextType::class, ['required' => false])
            ->add('AtaqueDesarmado', TextType::class, ['required' => false])
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
