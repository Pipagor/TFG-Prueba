<?php

namespace App\Controller;

use App\Entity\Clases;
use App\Entity\Dotes;
use App\Entity\Habilidades;
use App\Entity\Hechizos;
use App\Entity\Razas;
use App\Entity\Subclases;
use App\Entity\Subrazas;
use App\Entity\Trasfondo;
use App\Form\ClasesType;
use App\Form\DotesType;
use App\Form\HechizosType;
use App\Form\RazasType;
use App\Form\SubclasesType;
use App\Form\SubrazasType;
use App\Form\TrasfondoType;
use App\Repository\HabilidadesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Doctrine\ORM\EntityManagerInterface;

class PersonajeController extends AbstractController
{
    private $entityManager;
    
    public function __construct( EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/personaje', name: 'app_personaje')]
    public function index(Request $request): Response
    {
        $clases = $this->entityManager->getRepository(Clases::class)->FindAllValidated();
        $razas = $this->entityManager->getRepository(Razas::class)->FindAllValidated();
        $origenes = $this->entityManager->getRepository(Trasfondo::class)->findAllOrigen('Origen');
        $ocupaciones = $this->entityManager->getRepository(Trasfondo::class)->findAllOrigen('Ocupacion');
        $form = $this->createFormBuilder()
            ->add('Nombre', TextType::class, ['label' => 'Nombre'])
            ->add('Nivel', TextType::class, ['label' => 'Nivel'])
            ->add('Raza', ChoiceType::class, [
                'choices' => $this->data($razas)
            ])
            ->add('Clase', ChoiceType::class, [
                'choices' => $this->data($clases)
            ])
            ->add('Origen', ChoiceType::class, [
                'choices' => $this->data($origenes)
            ])
            ->add('Ocupacion', ChoiceType::class, [
                'choices' => $this->data($ocupaciones)
            ])
            ->add('save', SubmitType::class, ['label' => 'Enviar'])

            ->add('save', SubmitType::class, ['label' => 'Continuar'])
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $sesion = $request->getSession();
            $sesion->set('datos', $form->getData());
            //$this->entityManager->persist($clases);
            $this->entityManager->flush();
            return $this->redirectToRoute('app_personaje_paso2');
        }
        return $this->render('personaje/index.html.twig', [
            'controller_name' => 'PersonajeController', 'form' => $form
        ]);
    }

    #[Route('/personaje2', name: 'app_personaje_paso2')]
    public function paso2(Request $request): Response
    {
        $sesion = $request->getSession();
        $data = $sesion->get('datos');
        $data_clase = $this->entityManager->getRepository(Clases::class)->FindValidatedById($data['Clase']);

        $subclases = $this->entityManager->getRepository(Subclases::class)->FindClassById($data['Clase']);
        $subrazas = $this->entityManager->getRepository(Subrazas::class)->FindRazaById($data['Raza']);
        $form = $this->createFormBuilder()
            ->add('Subraza', ChoiceType::class, [
                'choices' => $this->data($subrazas)
            ])
            ->add('Subclase', ChoiceType::class, [
                'choices' => $this->data($subclases)
            ])
            ->add('save', SubmitType::class, ['label' => 'Enviar'])

            ->add('save', SubmitType::class, ['label' => 'Generar Ficha'])
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $sesion = $request->getSession();
            $sesion->set('datos2', $form->getData());
            $this->entityManager->flush();
            return $this->redirectToRoute('app_personaje_paso3');
        }
        return $this->render('personaje/index2.html.twig', [
            'controller_name' => 'PersonajeController', 'form' => $form
        ]);
    }

    #[Route('/ficha_de_personaje', name: 'app_personaje_paso3')]
    public function paso3(Request $request): Response
    {
        $sesion = $request->getSession();
        $_data = $sesion->get('datos');
        $data['Nombre'] = $_data['Nombre'];
        $data['Nivel'] = $_data['Nivel'];
        $data['Clase'] = $this->entityManager->getRepository(Clases::class)->FindValidatedById($_data['Clase']);
        $data['Raza'] = $this->entityManager->getRepository(Razas::class)->FindValidatedById($_data['Raza']);
        $data['Origen'] = $this->entityManager->getRepository(Trasfondo::class)->FindValidatedById($_data['Origen']);
        $data['Ocupacion'] = $this->entityManager->getRepository(Trasfondo::class)->FindValidatedById($_data['Ocupacion']);

        $_subdata = $sesion->get('datos2');
        $data['Subclase'] = $this->entityManager->getRepository(Subclases::class)->FindValidatedById($_subdata['Subclase']);
        $data['Subraza'] = $this->entityManager->getRepository(Subrazas::class)->FindValidatedById($_subdata['Subraza']);
        $data['Habilidades'] = $this->habilidades_ordenadas($this->entityManager->getRepository(Habilidades::class)->findByOrigin('clases',$_data['Clase']),
                                                            $this->entityManager->getRepository(Habilidades::class)->findByOrigin('subclases',$_subdata['Subclase']),
                                                            $this->entityManager->getRepository(Habilidades::class)->findByOrigin('razas',$_data['Raza']),
                                                            $this->entityManager->getRepository(Habilidades::class)->findByOrigin('subrazas',$_subdata['Subraza']),
                                                            $this->entityManager->getRepository(Habilidades::class)->findByOrigin('trasfondo',$_data['Origen']),
                                                            $this->entityManager->getRepository(Habilidades::class)->findByOrigin('trasfondo',$_data['Ocupacion']),
                                                            $_data['Nivel']);
        
        return $this->render('personaje/ficha.html.twig', [
            'datos' => $data
        ]);
    }

    private function data($array){
        $final = [];    
        foreach($array as $a){
            $final[$a->getNombre()] = $a->getId();
        }
        return $final;
    }

    private function habilidades_ordenadas($clase, $subclase, $raza, $subraza, $origen, $ocupacion, $nivel){
        $final = [];
        $i = 0;
        foreach($origen as $o){
            $final[$i] = $o;
            $i++;
        }
        foreach($ocupacion as $o){
            $final[$i] = $o;
            $i++;
        }
        foreach($raza as $o){
            $final[$i] = $o;
            $i++;
        }
        foreach($subraza as $o){
            $final[$i] = $o;
            $i++;
        }
        foreach($clase as $o){
            if($o->getOrigenNivel() <= $nivel){
                $final[$i] = $o;
            }
            $i++;
        }
        foreach($subclase as $o){
            if($o->getOrigenNivel() <= $nivel){
                $final[$i] = $o;
            }
            $i++;
        }
        return $final;
    }
}
