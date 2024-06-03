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
use Doctrine\ORM\EntityManagerInterface;



class BuscadorController extends AbstractController
{
    private $entityManager;
    
    public function __construct( EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /*PAGINA PRINCIPAL DE BUSCADOR*/
    #[Route('/buscador', name: 'app_buscador')]
    public function index(): Response
    {
        return $this->render('buscador/index.html.twig', [
            'controller_name' => 'BuscadorController',
        ]);
    }

    /*FORMULARIOS DE BUSQUEDA*/
    /*FORMULARIO DE CLASES*/
    #[Route('/buscador_clase', name: 'app_buscador_clase')]
    public function Buscador_Clases( Request $request):Response
	{
        $clase=new Clases();
       
		$form = $this->createForm(ClasesType::Class,$clase);
		$form->handleRequest($request);
       
        if ($form->isSubmitted() && $form->isValid()) {
            $clases = $form->getData();
            $sesion = $request->getSession();
            $sesion->set('clases', $clases);
            $this->entityManager->flush();
            return $this->redirectToRoute('app_resultados_clases');
        }

		return $this->render( 'buscador/formularios/clases.html.twig', array('form' => $form));
	}
        /*LISTADO DE RESULTADOS DE CLASES*/
        #[Route("/resultados_clase", name:"app_resultados_clases")]
        public function gestioneditarok(Request $request):Response
        {
            $resultado = $request->getSession()->get('clases');
            if($resultado == null){
                $resultado = new Clases;
            }
            $clases2 = $this->entityManager->getRepository(Clases::class)->FindFilter($resultado);
        
            return $this->render('buscador/resultados/clases.html.twig', [
                'resultado' => $clases2
            ]);
        }
            /*MOSTRAR UNA CLASE EN CONCRETO*/
            #[Route("/clase/{id}", name:"app_clase")]
            public function clasesok(Request $request, $id):Response
            {
                $clase = $this->entityManager->getRepository(Clases::class)->find($id);
                $rasgos = $this->entityManager->getRepository(Habilidades::class)->findByOrigin('clases',$id);
                $subclases = $this->entityManager->getRepository(Subclases::class)->FindClassById($id);
                $tabla = $this->progreso($rasgos, $id);
                
                return $this->render('buscador/mostrar/clases.html.twig', [
                    'clase' => $clase, 'rasgos' => $rasgos, 'tabla' => $tabla, 'subclases' => $subclases
                ]);
            }

    /*FORMULARIO DE SUBCLASES*/
    #[Route('/buscador_subclase', name: 'app_buscador_subclase')]
    public function Buscador_Subclases( Request $request):Response
	{
        $subclase = new Subclases();
	
        $form2 = $this->createForm(SubclasesType::Class,$subclase);
        $form2->handleRequest($request);

        if ($form2->isSubmitted() && $form2->isValid()) {
            $subclases = $form2->getData();
            $sesion = $request->getSession();
            $sesion->set('subclases', $subclases);
            $this->entityManager->flush();
            return $this->redirectToRoute('app_resultados_subclases');
        }

		return $this->render( 'buscador/formularios/subclases.html.twig', array('form2' => $form2));
	}
        /*LISTADO DE RESULTADOS DE SUBCLASES*/
        #[Route("/resultados_subclases", name:"app_resultados_subclases")]
        public function SubclasesOk(Request $request):Response
        {
            $resultado = $request->getSession()->get('subclases');
            if($resultado == null){
                $resultado = new Subclases;
            }
            $subclases = $this->entityManager->getRepository(Subclases::class)->FindFilter($resultado);
        
            return $this->render('buscador/resultados/subclases.html.twig', [
                'resultado' => $subclases
            ]);
        }
            /*MOSTRAR UNA SUBCLASE EN CONCRETO*/
            #[Route("/subclase/{id}", name:"app_subclase")]
            public function subok(Request $request, $id):Response
            {
                $subclase = $this->entityManager->getRepository(Subclases::class)->find($id);
                $clase = $this->entityManager->getRepository(Clases::class)->find($subclase->getClaseId());
                $rasgos = $this->entityManager->getRepository(Habilidades::class)->findByOrigin('subclases',$id);
                $rasgos_clase = $this->entityManager->getRepository(Habilidades::class)->findByOrigin('clases',$subclase->getClaseId());
                $tabla = $this->progreso_subclase($rasgos, $rasgos_clase, $id, $subclase->getClaseId());
                
                return $this->render('buscador/mostrar/subclases.html.twig', [
                    'subclase' => $subclase, 'clase' => $clase, 'tabla' => $tabla, 'rasgos' => $rasgos
                ]);
            }

    /*FORMULARIO DE RAZAS*/
    #[Route('/buscador_razas', name: 'app_buscador_razas')]
    public function Buscador_Razas( Request $request):Response
	{
        $raza=new Razas();
		$form = $this->createForm(RazasType::Class,$raza);
		$form->handleRequest($request);
       
        if ($form->isSubmitted() && $form->isValid()) {
            $razas = $form->getData();
            $sesion = $request->getSession();
            $sesion->set('razas', $razas);
           
            $this->entityManager->flush();
            return $this->redirectToRoute('app_resultados_razas');
        }
		
		return $this->render( 'buscador/formularios/razas.html.twig', array('form' => $form));
	}
        /*LISTADO DE RESULTADOS DE RAZAS*/
        #[Route("/resultados_razas", name:"app_resultados_razas")]
        public function Razas_Ok(Request $request):Response
        {
            $resultado = $request->getSession()->get('razas');
            if($resultado == null){
                $resultado = new Razas;
            }
            $clases2 = $this->entityManager->getRepository(Razas::class)->FindFilter($resultado);
        
            return $this->render('buscador/resultados/razas.html.twig', [
                'resultado' => $clases2
            ]);
        }
            /*MOSTRAR UNA RAZA EN CONCRETO*/
            #[Route("/raza/{id}", name:"app_raza")]
            public function razasok(Request $request, $id):Response
            {
                $raza = $this->entityManager->getRepository(Razas::class)->find($id);
                $subrazas = $this->entityManager->getRepository(Subrazas::class)->FindRazaById($id);
                $rasgos = $this->entityManager->getRepository(Habilidades::class)->findByOrigin('razas',$id);
            
                return $this->render('buscador/mostrar/razas.html.twig', [
                    'raza' => $raza, 'rasgos' => $rasgos, 'subrazas' => $subrazas
                ]);
            }

    /*FORMULARIO DE SUBRAZAS*/
    #[Route('/buscador_subraza', name: 'app_buscador_subraza')]
    public function Buscador_Subrazas( Request $request):Response
	{
        $subraza = new Subrazas();
		
        $form2 = $this->createForm(SubrazasType::Class,$subraza);
        $form2->handleRequest($request);
       
        if ($form2->isSubmitted() && $form2->isValid()) {
            $subrazas = $form2->getData();
            $sesion = $request->getSession();
            $sesion->set('subrazas', $subrazas);
            $this->entityManager->flush();
            return $this->redirectToRoute('app_resultados_subrazas');
        }

		return $this->render( 'buscador/formularios/subrazas.html.twig', array('form2' => $form2));
	}
        /*LISTADO DE RESULTADOS DE SUBRAZAS*/
        #[Route("/resultados_subrazas", name:"app_resultados_subrazas")]
        public function SubrazasOK(Request $request):Response
        {
            $resultado = $request->getSession()->get('subrazas');
            if($resultado == null){
                $resultado = new Subrazas;
            }
            $subrazas = $this->entityManager->getRepository(Subrazas::class)->FindFilter($resultado);
        
            return $this->render('buscador/resultados/subrazas.html.twig', [
                'resultado' => $subrazas
            ]);
        }
            /*MOSTRAR UNA SUBRAZA EN CONCRETO*/
            #[Route("/subraza/{id}", name:"app_subraza")]
            public function subzara(Request $request, $id):Response
            {
                $subraza = $this->entityManager->getRepository(Subrazas::class)->find($id);
                $rasgos = $this->entityManager->getRepository(Habilidades::class)->findByOrigin('subrazas',$id);
                $raza = $this->entityManager->getRepository(Razas::class)->find($subraza->getRazaId());

                return $this->render('buscador/mostrar/subrazas.html.twig', [
                    'subraza' => $subraza, 'rasgos' => $rasgos, 'raza' => $raza
                ]);
            }

    /*FORMULARIO DE TRASFONDOS*/
    #[Route('/buscador_trasfondo', name: 'app_buscador_trasfondo')]
    public function Buscador_Trasfondos( Request $request):Response
	{
        $trasfondo=new Trasfondo();
		$form = $this->createForm(TrasfondoType::Class,$trasfondo);
		$form->handleRequest($request);
       
        if ($form->isSubmitted() && $form->isValid()) {
            $trasfondos = $form->getData();
            $sesion = $request->getSession();
            $sesion->set('trasfondos', $trasfondos);
           
            $this->entityManager->flush();
            return $this->redirectToRoute('app_resultados_trasfondos');
        }
		
		return $this->render( 'buscador/formularios/trasfondos.html.twig', array('form' => $form));
	}
        /*LISTADO DE RESULTADOS DE TRASFONDOS*/
        #[Route("/resultados_trasfondos", name:"app_resultados_trasfondos")]
        public function Trasfondos_Ok(Request $request):Response
        {
            $resultado = $request->getSession()->get('trasfondos');
            if($resultado == null){
                $resultado = new Trasfondo;
            }
            $clases2 = $this->entityManager->getRepository(Trasfondo::class)->FindFilter($resultado);
        
            return $this->render('buscador/resultados/trasfondos.html.twig', [
                'resultado' => $clases2
            ]);
        }
            /*MOSTRAR UN TRASFONDO EN CONCRETO*/
            #[Route("/trasfondo/{id}", name:"app_trasfondo")]
            public function trasfondook(Request $request, $id):Response
            {
                $trasfondo = $this->entityManager->getRepository(Trasfondo::class)->find($id);
                $rasgos = $this->entityManager->getRepository(Habilidades::class)->findByOrigin('trasfondo',$id);
            
                return $this->render('buscador/mostrar/trasfondos.html.twig', [
                    'trasfondo' => $trasfondo, 'rasgos' => $rasgos
                ]);
            }

    /*FORMULARIO DE DOTES*/
    #[Route('/buscador_dotes', name: 'app_buscador_dotes')]
    public function Buscador_Dotes( Request $request):Response
	{
        $dote=new Dotes();
		$form = $this->createForm(DotesType::Class,$dote);  
		$form->handleRequest($request);
       
        if ($form->isSubmitted() && $form->isValid()) {
            $dotes = $form->getData();
            $sesion = $request->getSession();
            $sesion->set('dotes', $dotes);
           
            $this->entityManager->flush();
            return $this->redirectToRoute('app_resultados_dotes');
        }

		return $this->render( 'buscador/formularios/dotes.html.twig', array('form' => $form));
	}
        /*LISTADO DE RESULTADOS DE DOTES*/
        #[Route("/resultados_dotes", name:"app_resultados_dotes")]
        public function Dotes_Ok(Request $request):Response
        {
            $resultado = $request->getSession()->get('dotes');
            if($resultado == null){
                $resultado = new Dotes;
            }
            $dotes = $this->entityManager->getRepository(Dotes::class)->FindFilter($resultado);

            return $this->render('buscador/resultados/dotes.html.twig', [
                'resultado' => $dotes
            ]);
        }
            /*MOSTRAR UNA DOTE EN CONCRETO*/
            #[Route("/dote/{id}", name:"app_dote")]
            public function doteok(Request $request, $id):Response
            {
                $dote = $this->entityManager->getRepository(Dotes::class)->find($id);
            
                return $this->render('buscador/mostrar/dotes.html.twig', [
                    'dote' => $dote
                ]);
            }

    /*FORMULARIO DE HECHIZOS*/
    #[Route('/buscador_hechizos', name: 'app_buscador_hechizos')]
    public function Buscador_Hechizos( Request $request):Response
	{
        $trasfondo=new Hechizos();
		$form = $this->createForm(HechizosType::Class,$trasfondo);
            
		$form->handleRequest($request);
       
        if ($form->isSubmitted() && $form->isValid()) {
            $hechizos = $form->getData();
            $sesion = $request->getSession();
            $sesion->set('hechizos', $hechizos);
            $sesion->set('prueba', "prueba");
           
            $this->entityManager->flush();
            return $this->redirectToRoute('app_resultados_hechizos');
        }
		
		return $this->render( 'buscador/formularios/hechizos.html.twig', array('form' => $form));
	}
        /*LISTADO DE RESULTADOS DE HECHIZOS*/
        #[Route("/resultados_hechizos", name:"app_resultados_hechizos")]
        public function Hechizos_Ok(Request $request):Response
        {
            $resultado = $request->getSession()->get('hechizos');
            if($resultado == null){
                $resultado = new Hechizos;
            }
            $clases2 = $this->entityManager->getRepository(Hechizos::class)->FindFilter($resultado);
        
            return $this->render('buscador/resultados/hechizos.html.twig', [
                'resultado' => $clases2
            ]);
        }
            /*MOSTRAR UN HECHIZO EN CONCRETO*/
            #[Route("/hechizo/{id}", name:"app_hechizo")]
            public function hechizook(Request $request, $id):Response
            {
                $hechizo = $this->entityManager->getRepository(Hechizos::class)->find($id);
            
                return $this->render('buscador/mostrar/hechizos.html.twig', [
                    'hechizo' => $hechizo
                ]);
            }

    
    /* FUNCIONES ADICIONALES */

    private function progreso($rasgos, $id){
        $final = [];
        for ($i = 1; $i <= 20; $i++){
            if($id == 3){
                $linea = [$i,$this->competencia($i),$this->mejoras_final($rasgos,$i),$this->tabla_artista($i)];
            }
            else{
                $linea = [$i,$this->competencia($i),$this->mejoras_final($rasgos,$i)];
            }
            $final[$i-1] = $linea;
        }
        return $final;
    }

    private function progreso_subclase($rasgos, $rasgos_clase, $id, $id_clase){
        $final = [];
        for ($i = 1; $i <= 20; $i++){
            if($id_clase == 3){
                $linea = [$i,$this->competencia($i),$this->mejoras_subclase($rasgos, $rasgos_clase, $i),$this->tabla_artista($i)];
            }
            else{
                $linea = [$i,$this->competencia($i),$this->mejoras_subclase($rasgos, $rasgos_clase, $i)];
            }
            $final[$i-1] = $linea;
        }
        return $final;
    }

    private function mejoras_subclase($rasgos, $rasgos_clase, $i){
        if($this->mejoras_final($rasgos_clase, $i) == '' && $this->mejoras_final($rasgos, $i) == ''){
            return '';
        }
        else if($this->mejoras_final($rasgos_clase, $i) == '' && $this->mejoras_final($rasgos, $i) != ''){
            return $this->mejoras_final($rasgos, $i);
        }
        else if($this->mejoras_final($rasgos_clase, $i) != '' && $this->mejoras_final($rasgos, $i) == ''){
            return $this->mejoras_final($rasgos_clase, $i);
        }
        else{
            return $this->mejoras_final($rasgos_clase, $i) . ', ' . $this->mejoras_final($rasgos, $i);
        }
    }

    private function mejoras_final($rasgos, $i){
        if ($this->habilidades($rasgos,$i) == '' && $this->evoluciones($rasgos,$i) == ''){
            return '';
        }

        else if ($this->habilidades($rasgos,$i) == '' &&  $this->evoluciones($rasgos,$i) != ''){
            return $this->evoluciones($rasgos,$i);
        }

        else if ($this->habilidades($rasgos,$i) != '' &&  $this->evoluciones($rasgos,$i) == ''){
            return $this->habilidades($rasgos,$i);
        }

        else{
            return $this->habilidades($rasgos,$i) . ', ' . $this->evoluciones($rasgos,$i);
        }
    }


    private function habilidades($rasgos,$i){
        $final = '';
        foreach($rasgos as $r){
            if ($r->getOrigenNivel() == $i){
                $final = $final . $r->getNombre() . ', ';
            }
        }
        $final = substr($final,0, -2);
        return $final;
    }


    private function evoluciones($rasgos, $i){
        $final = '';
        foreach($rasgos as $r){
            if (str_contains($r->getDescripcion(), '{' . $i . '}')){
                $final = $final . $r->getNombre() . ' (Mejora), ';
            }
        }
        $final = substr($final,0, -2);
        return $final;
    }

    private function competencia($nivel){
        switch ($nivel):
            case 1:
                return '+2';
            case 2:
                return '+2';
            case 3:
                return '+2';
            case 4:
                return '+2';
            case 5:
                return '+3';
            case 6:
                return '+3';
            case 7:
                return '+3';
            case 8:
                return '+3';
            case 9:
                return '+4';
            case 10:
                return '+4';
            case 11:
                return '+4';
            case 12:
                return '+4';
            case 13:
                return '+5';
            case 14:
                return '+5';
            case 15:
                return '+5';
            case 16:
                return '+5';
            case 17:
                return '+6';
            case 18:
                return '+6';
            case 19:
                return '+6';
            case 20:
                return '+6';
        endswitch;
    }
   
    private function tabla_artista($nivel){
        switch ($nivel):
            case 1:
                return '1';
            case 2:
                return '2';
            case 3:
                return '2';
            case 4:
                return '2';
            case 5:
                return '3';
            case 6:
                return '3';
            case 7:
                return '3';
            case 8:
                return '3';
            case 9:
                return '3';
            case 10:
                return '4';
            case 11:
                return '4';
            case 12:
                return '4';
            case 13:
                return '4';
            case 14:
                return '4';
            case 15:
                return '5';
            case 16:
                return '5';
            case 17:
                return '5';
            case 18:
                return '6';
            case 19:
                return '6';
            case 20:
                return '8';
        endswitch;
    }

    private function mergeadordearrays($array){
        $final = [];    
        foreach($array as $a){
           
            array_push($final, $a['Autor']);
        }
        return $final;
    }
}
