<?php

namespace App\Controller;

use App\Entity\Clases;
use App\Entity\Dotes;
use App\Entity\Habilidades;
use App\Entity\Habilidades5;
use App\Entity\Hechizos;
use App\Entity\Razas;
use App\Entity\Subclases;
use App\Entity\Subrazas;
use App\Entity\Trasfondo;
use App\Form\ClasesType;
use App\Form\ClasesType2;
use App\Form\DotesType;
use App\Form\DotesType2;
use App\Form\Habilidades5Type;
use App\Form\HabilidadesType1;
use App\Form\HabilidadesType1Type;
use App\Form\HabilidadesType2;
use App\Form\HechizosType;
use App\Form\HechizosType2;
use App\Form\RazasType;
use App\Form\RazasType2;
use App\Form\SubclasesType;
use App\Form\SubclasesType2;
use App\Form\SubrazasType;
use App\Form\SubrazasType2;
use App\Form\TrasfondoType;
use App\Form\TrasfondoType2;
use App\Repository\HabilidadesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

class SolicitudesController extends AbstractController
{
    private $entityManager;
    
    public function __construct( EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
       
    }
    #[Route('/solicitudes', name: 'app_solicitudes')]
    public function index(): Response
    {
        return $this->render('solicitudes/index.html.twig', [
            'controller_name' => 'SolicitudesController',
        ]);
    }


    #[Route('/revisiones', name: 'app_revisiones')]
    public function revisiones(): Response
    {
        $clases = $this->entityManager->getRepository(Clases::class)->FindNonValidated();
        $contador_clases= count($clases);

        $subclases = $this->entityManager->getRepository(Subclases::class)->FindNonValidated();
        $contador_subclases= count($subclases);

        $razas = $this->entityManager->getRepository(Razas::class)->FindNonValidated();
        $contador_razas= count($razas);

        $subrazas = $this->entityManager->getRepository(Subrazas::class)->FindNonValidated();
        $contador_subrazas= count($subrazas);

        $trasfondos = $this->entityManager->getRepository(Trasfondo::class)->FindNonValidated();
        $contador_trasfondos= count($trasfondos);

        $dotes = $this->entityManager->getRepository(Dotes::class)->FindNonValidated();
        $contador_dotes= count($dotes);

        $hechizos = $this->entityManager->getRepository(Hechizos::class)->FindNonValidated();
        $contador_hechizos= count($hechizos);
        
        return $this->render('revisiones/index.html.twig', [
            'controller_name' => 'SolicitudesController', 
            'clases' => $contador_clases,
            'subclases' => $contador_subclases,
            'razas' => $contador_razas,
            'subrazas' => $contador_subrazas,
            'trasfondos' => $contador_trasfondos,
            'dotes' => $contador_dotes,
            'hechizos' => $contador_hechizos,
        ]);
    }


    #[Route('/revisiones_clase', name: 'app_revisiones_clase')]
    public function revisiones_clase(): Response
    {
        $revisiones = $this->entityManager->getRepository(Clases::class)->FindNonValidated();
        return $this->render('revisiones/revisiones_clase.html.twig', [
            'revisiones' => $revisiones,
        ]);
    }


    #[Route('/solicitud_clase', name: 'app_solicitud_clase')]
    public function Buscador_Clases( Request $request):Response
	{
       $ipAddress = $request->getClientIp();
       $currentDate = new \DateTime();

       $count = $this->entityManager->getRepository(Clases::class)->count([
           'ipAddress' => $ipAddress,
           'createdAt' => $currentDate
         ]);
        
        $clase=new Clases();
       
		$form = $this->createForm(ClasesType2::Class,$clase);
		$form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            if ($count >= 2){
                $this->addFlash('error', 'Has superado el límite de solicitudes por IP');
                return $this->redirectToRoute('app_index');
            }

            $clases = $form->getData();
            if ($clases->getAutor() == null || strtolower($clases->getAutor() )== 'clash of fates'){
                $clases->setAutor('Anónimo');
            }

            if ($clases->getImg() == null){
                $clases->setImg('https://wallpaperaccess.com/full/1902223.png');
            }

            $clases->setIpAddress($ipAddress);

            $clases->setValidado(false);
            $sesion = $request->getSession();
            $sesion->set('clases', $clases);
            //$this->entityManager->persist($clases);
            $this->entityManager->flush();
            return $this->redirectToRoute('app_solicitud_clase_habilidades');
        }
		return $this->render( 'solicitudes/clases.html.twig', array('form' => $form));
	}

    #[Route("/solicitud_clase_habilidades", name:"app_solicitud_clase_habilidades")]
    public function habilidades_clase(Request $request):Response
    {
        $habilidades = new Habilidades5();
       
        $form = $this->createForm(Habilidades5Type::Class,$habilidades);
        $form->handleRequest($request);
       

        if($form->isSubmitted() && $form->isValid()){
             $this->entityManager->persist($request->getSession()->get('clases'));
             $this->entityManager->flush();
             $clase = $this->entityManager->getRepository(Clases::class)->FindLastID();
             $habilidades = $form->getData();
             $habilidades1 = new Habilidades();
             $habilidades2 = new Habilidades();
             $habilidades3 = new Habilidades();
             $habilidades4 = new Habilidades();
             $habilidades5 = new Habilidades();
           
             
            $habilidades1->setNombre($habilidades->getNombre());
            $habilidades1->setDescripcion($habilidades->getDescripcion());
            $habilidades1->setOrigenNivel($habilidades->getOrigenNivel());
            $habilidades1->setOrigenID('clases_' . $clase->getId());
            $habilidades1->setValidado(false);
            $habilidades1->setAutor($clase->getAutor());

            $habilidades2->setNombre($habilidades->getNombre2());
            $habilidades2->setDescripcion($habilidades->getDescripcion2());
            $habilidades2->setOrigenNivel($habilidades->getOrigenNivel2());
            $habilidades2->setOrigenID('clases_' . $clase->getId());
            $habilidades2->setValidado(false);
            $habilidades2->setAutor($clase->getAutor());

            $habilidades3->setNombre($habilidades->getNombre3());
            $habilidades3->setDescripcion($habilidades->getDescripcion3());
            $habilidades3->setOrigenNivel($habilidades->getOrigenNivel3());
            $habilidades3->setOrigenID('clases_' . $clase->getId());
            $habilidades3->setValidado(false);
            $habilidades3->setAutor($clase->getAutor());

            $habilidades4->setNombre($habilidades->getNombre4());
            $habilidades4->setDescripcion($habilidades->getDescripcion4());
            $habilidades4->setOrigenNivel($habilidades->getOrigenNivel4());
            $habilidades4->setOrigenID('clases_' . $clase->getId());
            $habilidades4->setValidado(false);
            $habilidades4->setAutor($clase->getAutor());

            $habilidades5->setNombre($habilidades->getNombre5());
            $habilidades5->setDescripcion($habilidades->getDescripcion5());
            $habilidades5->setOrigenNivel($habilidades->getOrigenNivel5());
            $habilidades5->setOrigenID('clases_' . $clase->getId());
            $habilidades5->setValidado(false);
            $habilidades5->setAutor($clase->getAutor());

            
             $this->entityManager->persist($habilidades1); 
             $this->entityManager->persist($habilidades2);
             $this->entityManager->persist($habilidades3);
             $this->entityManager->persist($habilidades4);
             $this->entityManager->persist($habilidades5);
             $this->entityManager->flush();
            return $this->redirectToRoute('app_solicitud_ok');
        }
        return $this->render('solicitudes/habilidades_clase.html.twig', [
            'form' => $form, 
        ]);
    }

    
    #[Route("/solicitud_ok", name:"app_solicitud_ok")]
    public function gestioneditarok(Request $request):Response
    {
        return $this->render('solicitudes/solicitud_ok.html.twig', []);
    }


    #[Route("/solicitud_clase/{id}", name:"app_comprobar_clase")]
    public function clasesok(Request $request, $id):Response
    {
        $clase = $this->entityManager->getRepository(Clases::class)->find($id);
        $rasgos = $this->entityManager->getRepository(Habilidades::class)->findByOriginNonValidated('clases',$id);
        $subclases = $this->entityManager->getRepository(Subclases::class)->FindClassById($id);
        $tabla = $this->progreso($rasgos, $id);
                
        return $this->render('buscador/mostrar/clases.html.twig', [
            'clase' => $clase, 'rasgos' => $rasgos, 'tabla' => $tabla, 'subclases' => $subclases
        ]);
    }

   

    #[Route("/validar_clase/{id}", name:"app_validar_clase")]
    public function validarClase($id)
{
    $clase = $this->entityManager->getRepository(Clases::class)->find($id);
    $habilidades = $this->entityManager->getRepository(Habilidades::class)->findByOriginNonValidated('clases',$id);
    foreach($habilidades as $h){
       $h->setValidado(1);
    }

    $clase->setValidado(1);
    $this->entityManager->flush();

    return $this->redirectToRoute('app_revisiones_clase');
}

#[Route("/eliminar_clase/{id}", name:"app_eliminar_clase")]
public function eliminarClase($id)
{
    $clase = $this->entityManager->getRepository(Clases::class)->find($id);
    $habilidades = $this->entityManager->getRepository(Habilidades::class)->findByOriginNonValidated('clases',$id);
    foreach($habilidades as $h){
        $this->entityManager->remove($h);
    }
    $this->entityManager->remove($clase);
    $this->entityManager->flush();

    return $this->redirectToRoute('app_revisiones_clase');
}

#[Route('/revisiones_subclase', name: 'app_revisiones_subclase')]
public function revisiones_subclase(): Response
{
    $revisiones = $this->entityManager->getRepository(Subclases::class)->FindNonValidated();
    return $this->render('revisiones/revisiones_subclase.html.twig', [
        'revisiones' => $revisiones,
    ]);
}

#[Route('/solicitudes_subclase', name: 'app_solicitudes_subclase')]
public function Buscador_Subclases( Request $request):Response
{
    $subclase=new Subclases();
   
    $form = $this->createForm(SubclasesType2::Class,$subclase);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $subclases = $form->getData();
        if ($this->copyright($subclases->getAutor())){
            $subclases->setAutor('Anónimo');
        }

        if ($subclases->getImg() == null){
            $subclases->setImg($this->entityManager->getRepository(Clases::class)->FindImg($subclases->getClaseId()));
        }

        $subclases->setValidado(false);
        $sesion = $request->getSession();
        $sesion->set('subclases', $subclases);
        //$this->entityManager->persist($subclases);
        $this->entityManager->flush();
        return $this->redirectToRoute('app_solicitud_subclase_habilidades');
    }
    return $this->render( 'solicitudes/subclases.html.twig', array('form' => $form));
}

#[Route("/solicitud_subclase_habilidades", name:"app_solicitud_subclase_habilidades")]
    public function habilidades_subclase(Request $request):Response
    {
        $habilidades = new Habilidades5();
       
        $form = $this->createForm(Habilidades5Type::Class,$habilidades);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            
             $this->entityManager->persist($request->getSession()->get('subclases'));
             $this->entityManager->flush();
             $subclase = $this->entityManager->getRepository(Subclases::class)->FindLastID();
             $habilidades = $form->getData();
             $habilidades1 = new Habilidades();
             $habilidades2 = new Habilidades();
             $habilidades3 = new Habilidades();
             $habilidades4 = new Habilidades();
             $habilidades5 = new Habilidades();
           
             
            $habilidades1->setNombre($habilidades->getNombre());
            $habilidades1->setDescripcion($habilidades->getDescripcion());
            $habilidades1->setOrigenNivel($habilidades->getOrigenNivel());
            $habilidades1->setOrigenID('subclases_' . $subclase->getId());
            $habilidades1->setValidado(false);
            $habilidades1->setAutor($subclase->getAutor());

            $habilidades2->setNombre($habilidades->getNombre2());
            $habilidades2->setDescripcion($habilidades->getDescripcion2());
            $habilidades2->setOrigenNivel($habilidades->getOrigenNivel2());
            $habilidades2->setOrigenID('subclases_' . $subclase->getId());
            $habilidades2->setValidado(false);
            $habilidades2->setAutor($subclase->getAutor());

            $habilidades3->setNombre($habilidades->getNombre3());
            $habilidades3->setDescripcion($habilidades->getDescripcion3());
            $habilidades3->setOrigenNivel($habilidades->getOrigenNivel3());
            $habilidades3->setOrigenID('subclases_' . $subclase->getId());
            $habilidades3->setValidado(false);
            $habilidades3->setAutor($subclase->getAutor());

            $habilidades4->setNombre($habilidades->getNombre4());
            $habilidades4->setDescripcion($habilidades->getDescripcion4());
            $habilidades4->setOrigenNivel($habilidades->getOrigenNivel4());
            $habilidades4->setOrigenID('subclases_' . $subclase->getId());
            $habilidades4->setValidado(false);
            $habilidades4->setAutor($subclase->getAutor());

            $habilidades5->setNombre($habilidades->getNombre5());
            $habilidades5->setDescripcion($habilidades->getDescripcion5());
            $habilidades5->setOrigenNivel($habilidades->getOrigenNivel5());
            $habilidades5->setOrigenID('subclases_' . $subclase->getId());
            $habilidades5->setValidado(false);
            $habilidades5->setAutor($subclase->getAutor());

            
             $this->entityManager->persist($habilidades1); 
             $this->entityManager->persist($habilidades2);
             $this->entityManager->persist($habilidades3);
             $this->entityManager->persist($habilidades4);
             $this->entityManager->persist($habilidades5);
            // $this->entityManager->persist($habilidadesII);
            // $this->entityManager->persist($habilidadesIII);
            // $this->entityManager->persist($habilidadesIV);
            // $this->entityManager->persist($habilidadesV);
             $this->entityManager->flush();
            return $this->redirectToRoute('app_solicitud_ok');
        }
        return $this->render('solicitudes/habilidades_subclase.html.twig', [
            'form' => $form, 
        ]);
    }

     
#[Route("/solicitud_subclase/{id}", name:"app_comprobar_subclase")]
public function subclaseok(Request $request, $id):Response
{    
    $subclase = $this->entityManager->getRepository(Subclases::class)->find($id);
    $clase = $this->entityManager->getRepository(Clases::class)->find($subclase->getClaseId());
    $rasgos = $this->entityManager->getRepository(Habilidades::class)->findByOriginNonValidated('subclases',$id);
    $rasgos_clase = $this->entityManager->getRepository(Habilidades::class)->findByOrigin('clases',$subclase->getClaseId());
    $tabla = $this->progreso_subclase($rasgos, $rasgos_clase, $id, $subclase->getClaseId());
                
    return $this->render('buscador/mostrar/subclases.html.twig', [
        'subclase' => $subclase, 'clase' => $clase, 'tabla' => $tabla, 'rasgos' => $rasgos
    ]);
}

#[Route("/validar_subclase/{id}", name:"app_validar_subclase")]
public function validarSubclase($id)
{
    $subclase = $this->entityManager->getRepository(Subclases::class)->find($id);

    $habilidades = $this->entityManager->getRepository(Habilidades::class)->findByOriginNonValidated('subclases',$id);
    foreach($habilidades as $h){
        $h->setValidado(1);
    }
    $subclase->setValidado(1);
    $this->entityManager->flush();

    return $this->redirectToRoute('app_revisiones_subclase');
}

#[Route("/eliminar_subclase/{id}", name:"app_eliminar_subclase")]
public function eliminarSubclase($id)
{
    $clase = $this->entityManager->getRepository(Subclases::class)->find($id);
    $habilidades = $this->entityManager->getRepository(Habilidades::class)->findByOriginNonValidated('subclases',$id);
    foreach($habilidades as $h){
        $this->entityManager->remove($h);
    }

    $this->entityManager->remove($clase);
    $this->entityManager->flush();

    return $this->redirectToRoute('app_revisiones_subclase');
}

#[Route('/solicitud_raza', name: 'app_solicitud_raza')]
    public function Solicitudes_Razas( Request $request):Response
	{
        $raza=new Razas();
       
		$form = $this->createForm(RazasType2::Class,$raza);
		$form->handleRequest($request);       
        
        if ($form->isSubmitted() && $form->isValid()) {
            $razas = $form->getData();
            if ($razas->getAutor() == null || strtolower($razas->getAutor() )== 'clash of fates'){
                $razas->setAutor('Anónimo-');
            }

            if ($razas->getImg() == null){
                $razas->setImg('https://wallpaperaccess.com/full/1902223.png');
            }

            $razas->setValidado(false);
            $sesion = $request->getSession();
            $sesion->set('razas', $razas);
            $this->entityManager->flush();
            return $this->redirectToRoute('app_solicitud_raza_habilidades');
        }
		return $this->render( 'solicitudes/razas.html.twig', array('form' => $form));
	}

#[Route("/solicitud_raza_habilidades", name:"app_solicitud_raza_habilidades")]
    public function habilidades_raza(Request $request):Response
    {
        $habilidades = new Habilidades5();
       
        $form = $this->createForm(Habilidades5Type::Class,$habilidades);
        $form->handleRequest($request);
       

        if($form->isSubmitted() && $form->isValid()){
            $this->entityManager->persist($request->getSession()->get('razas'));
            $this->entityManager->flush();
            $raza = $this->entityManager->getRepository(Razas::class)->FindLastID();
            $habilidades = $form->getData();
            $habilidades1 = new Habilidades();
            $habilidades2 = new Habilidades();
            $habilidades3 = new Habilidades();
            $habilidades4 = new Habilidades();
            $habilidades5 = new Habilidades();
             
            $habilidades1->setNombre($habilidades->getNombre());
            $habilidades1->setDescripcion($habilidades->getDescripcion());
            $habilidades1->setOrigenNivel($habilidades->getOrigenNivel());
            $habilidades1->setOrigenID('razas_' . $raza->getId());
            $habilidades1->setValidado(false);
            $habilidades1->setAutor($raza->getAutor());

            $habilidades2->setNombre($habilidades->getNombre2());
            $habilidades2->setDescripcion($habilidades->getDescripcion2());
            $habilidades2->setOrigenNivel($habilidades->getOrigenNivel2());
            $habilidades2->setOrigenID('razas_' . $raza->getId());
            $habilidades2->setValidado(false);
            $habilidades2->setAutor($raza->getAutor());

            $habilidades3->setNombre($habilidades->getNombre3());
            $habilidades3->setDescripcion($habilidades->getDescripcion3());
            $habilidades3->setOrigenNivel($habilidades->getOrigenNivel3());
            $habilidades3->setOrigenID('razas_' . $raza->getId());
            $habilidades3->setValidado(false);
            $habilidades3->setAutor($raza->getAutor());

            $habilidades4->setNombre($habilidades->getNombre4());
            $habilidades4->setDescripcion($habilidades->getDescripcion4());
            $habilidades4->setOrigenNivel($habilidades->getOrigenNivel4());
            $habilidades4->setOrigenID('razas_' . $raza->getId());
            $habilidades4->setValidado(false);
            $habilidades4->setAutor($raza->getAutor());

            $habilidades5->setNombre($habilidades->getNombre5());
            $habilidades5->setDescripcion($habilidades->getDescripcion5());
            $habilidades5->setOrigenNivel($habilidades->getOrigenNivel5());
            $habilidades5->setOrigenID('razas_' . $raza->getId());
            $habilidades5->setValidado(false);
            $habilidades5->setAutor($raza->getAutor());
            
            $this->entityManager->persist($habilidades1); 
            $this->entityManager->persist($habilidades2);
            $this->entityManager->persist($habilidades3);
            $this->entityManager->persist($habilidades4);
            $this->entityManager->persist($habilidades5);
            $this->entityManager->flush();
            return $this->redirectToRoute('app_solicitud_ok');
        }
        return $this->render('solicitudes/habilidades_raza.html.twig', [
            'form' => $form, 
        ]);
    }



#[Route('/revisiones_razas', name: 'app_revisiones_raza')]
    public function revisiones_razas(): Response
    {
        $revisiones = $this->entityManager->getRepository(Razas::class)->FindNonValidated();
        return $this->render('revisiones/revisiones_raza.html.twig', [
            'revisiones' => $revisiones,
        ]);
    }

#[Route("/solicitud_raza/{id}", name:"app_comprobar_raza")]
    public function razaok(Request $request, $id):Response
    {
        $raza = $this->entityManager->getRepository(Razas::class)->find($id);
        $subrazas = $this->entityManager->getRepository(Subrazas::class)->FindRazaById($id);
        $rasgos = $this->entityManager->getRepository(Habilidades::class)->findByOriginNonValidated('razas',$id);
            
        return $this->render('buscador/mostrar/razas.html.twig', [
            'raza' => $raza, 'rasgos' => $rasgos, 'subrazas' => $subrazas
        ]);
    }

#[Route("/validar_raza/{id}", name:"app_validar_raza")]
public function validarRazas($id)
{
$raza = $this->entityManager->getRepository(Razas::class)->find($id);

$habilidades = $this->entityManager->getRepository(Habilidades::class)->findByOriginNonValidated('razas',$id);
foreach($habilidades as $h){
   $h->setValidado(1);
}
$raza->setValidado(1);
$this->entityManager->flush();

return $this->redirectToRoute('app_revisiones_raza');
}

#[Route("/eliminar_raza/{id}", name:"app_eliminar_raza")]
public function eliminarRaza($id)
{
$raza = $this->entityManager->getRepository(Razas::class)->find($id);
$habilidades = $this->entityManager->getRepository(Habilidades::class)->findByOriginNonValidated('razas',$id);
foreach($habilidades as $h){
    $this->entityManager->remove($h);
}

$this->entityManager->remove($raza);
$this->entityManager->flush();

return $this->redirectToRoute('app_revisiones_raza');
}

#[Route('/solicitud_subraza', name: 'app_solicitud_subraza')]
    public function Solicitudes_Subrazas( Request $request):Response
	{
       
        
        $subraza=new Subrazas();
       
		$form = $this->createForm(SubrazasType2::Class,$subraza);
        
            
		$form->handleRequest($request);
       
       
        
        if ($form->isSubmitted() && $form->isValid()) {
            $subrazas = $form->getData();
            if ($subrazas->getAutor() == null || strtolower($subrazas->getAutor() )== 'clash of fates'){
                $subrazas->setAutor('Anónimo');
            }

            if ($subrazas->getImg() == null){
                $subrazas->setImg($this->entityManager->getRepository(Razas::class)->FindImg($subrazas->getRazaId()));
            }

            $subrazas->setValidado(false);
            $sesion = $request->getSession();
            $sesion->set('subrazas', $subrazas);
            //$this->entityManager->persist($subrazas);
            $this->entityManager->flush();
            return $this->redirectToRoute('app_solicitud_subraza_habilidades');
        }
        
		return $this->render( 'solicitudes/subrazas.html.twig', array('form' => $form));
	}

    #[Route('/revisiones_subrazas', name: 'app_revisiones_subraza')]
public function revisiones_subrazas(): Response
{
    $revisiones = $this->entityManager->getRepository(Subrazas::class)->FindNonValidated();
    return $this->render('revisiones/revisiones_subraza.html.twig', [
        'revisiones' => $revisiones,
    ]);
}

#[Route("/solicitud_subraza_habilidades", name:"app_solicitud_subraza_habilidades")]
    public function habilidades_subraza(Request $request):Response
    {
        $habilidades = new Habilidades5();
       
        $form = $this->createForm(Habilidades5Type::Class,$habilidades);

        

        $form->handleRequest($request);
       

        if($form->isSubmitted() && $form->isValid()){
            
             $this->entityManager->persist($request->getSession()->get('subrazas'));
             $this->entityManager->flush();
             $subraza = $this->entityManager->getRepository(Subrazas::class)->FindLastID();
             $habilidades = $form->getData();
             $habilidades1 = new Habilidades();
             $habilidades2 = new Habilidades();
             $habilidades3 = new Habilidades();
             $habilidades4 = new Habilidades();
             $habilidades5 = new Habilidades();
           
             
            $habilidades1->setNombre($habilidades->getNombre());
            $habilidades1->setDescripcion($habilidades->getDescripcion());
            $habilidades1->setOrigenNivel($habilidades->getOrigenNivel());
            $habilidades1->setOrigenID('subrazas_' . $subraza->getId());
            $habilidades1->setValidado(false);
            $habilidades1->setAutor($subraza->getAutor());

            $habilidades2->setNombre($habilidades->getNombre2());
            $habilidades2->setDescripcion($habilidades->getDescripcion2());
            $habilidades2->setOrigenNivel($habilidades->getOrigenNivel2());
            $habilidades2->setOrigenID('subrazas_' . $subraza->getId());
            $habilidades2->setValidado(false);
            $habilidades2->setAutor($subraza->getAutor());

            $habilidades3->setNombre($habilidades->getNombre3());
            $habilidades3->setDescripcion($habilidades->getDescripcion3());
            $habilidades3->setOrigenNivel($habilidades->getOrigenNivel3());
            $habilidades3->setOrigenID('subrazas_' . $subraza->getId());
            $habilidades3->setValidado(false);
            $habilidades3->setAutor($subraza->getAutor());

            $habilidades4->setNombre($habilidades->getNombre4());
            $habilidades4->setDescripcion($habilidades->getDescripcion4());
            $habilidades4->setOrigenNivel($habilidades->getOrigenNivel4());
            $habilidades4->setOrigenID('subrazas_' . $subraza->getId());
            $habilidades4->setValidado(false);
            $habilidades4->setAutor($subraza->getAutor());

            $habilidades5->setNombre($habilidades->getNombre5());
            $habilidades5->setDescripcion($habilidades->getDescripcion5());
            $habilidades5->setOrigenNivel($habilidades->getOrigenNivel5());
            $habilidades5->setOrigenID('subrazas_' . $subraza->getId());
            $habilidades5->setValidado(false);
            $habilidades5->setAutor($subraza->getAutor());

            
             $this->entityManager->persist($habilidades1); 
             $this->entityManager->persist($habilidades2);
             $this->entityManager->persist($habilidades3);
             $this->entityManager->persist($habilidades4);
             $this->entityManager->persist($habilidades5);
            // $this->entityManager->persist($habilidadesII);
            // $this->entityManager->persist($habilidadesIII);
            // $this->entityManager->persist($habilidadesIV);
            // $this->entityManager->persist($habilidadesV);
             $this->entityManager->flush();
            return $this->redirectToRoute('app_solicitud_ok');
        }
        return $this->render('solicitudes/habilidades_subraza.html.twig', [
            'form' => $form, 
        ]);
    }

#[Route("/solicitud_subraza/{id}", name:"app_comprobar_subraza")]
public function subrazaok(Request $request, $id):Response
{
    $subraza = $this->entityManager->getRepository(Subrazas::class)->find($id);
    $rasgos = $this->entityManager->getRepository(Habilidades::class)->findByOriginNonValidated('subrazas',$id);
    $raza = $this->entityManager->getRepository(Razas::class)->find($subraza->getRazaId());

    return $this->render('buscador/mostrar/subrazas.html.twig', [
        'subraza' => $subraza, 'rasgos' => $rasgos, 'raza' => $raza
    ]);
}

#[Route("/validar_subraza/{id}", name:"app_validar_subraza")]
public function validarSubrazas($id)
{
$subraza = $this->entityManager->getRepository(Subrazas::class)->find($id);

$habilidades = $this->entityManager->getRepository(Habilidades::class)->findByOriginNonValidated('subrazas',$id);
foreach($habilidades as $h){
$h->setValidado(1);
}
$subraza->setValidado(1);
$this->entityManager->flush();

return $this->redirectToRoute('app_revisiones_subraza');
}

#[Route("/eliminar_subraza/{id}", name:"app_eliminar_subraza")]
public function eliminarSubraza($id)
{
$subraza = $this->entityManager->getRepository(Subrazas::class)->find($id);

$habilidades = $this->entityManager->getRepository(Habilidades::class)->findByOriginNonValidated('subrazas',$id);
foreach($habilidades as $h){
$this->entityManager->remove($h);
}
$this->entityManager->remove($subraza);
$this->entityManager->flush();

return $this->redirectToRoute('app_revisiones_subraza');
}

#[Route('/solicitud_trasfondos', name: 'app_solicitud_trasfondos')]
    public function Solicitudes_Trasfondos( Request $request):Response
	{
       
        
        $trasfondo=new Trasfondo();
       
		$form = $this->createForm(TrasfondoType2::Class,$trasfondo);
        
            
		$form->handleRequest($request);
       
       
        
        if ($form->isSubmitted() && $form->isValid()) {
            $trasfondos = $form->getData();
            if ($trasfondos->getAutor() == null || strtolower($trasfondos->getAutor() )== 'clash of fates'){
                $trasfondos->setAutor('Anónimo');
            }

            if ($trasfondos->getImg() == null){
                $trasfondos->setImg('https://wallpaperaccess.com/full/1902223.png');
            }

            $trasfondos->setValidado(false);
            $sesion = $request->getSession();
            $sesion->set('trasfondo', $trasfondos);
            //$this->entityManager->persist($trasfondos);
            $this->entityManager->flush();
            return $this->redirectToRoute('app_solicitud_trasfondo_habilidades');
        }
        
		return $this->render( 'solicitudes/trasfondos.html.twig', array('form' => $form));
	}

    #[Route("/solicitud_trasfondo_habilidades", name:"app_solicitud_trasfondo_habilidades")]
    public function habilidades_trasfondo(Request $request):Response
    {
        $habilidades = new Habilidades5();
       
        $form = $this->createForm(Habilidades5Type::Class,$habilidades);

        

        $form->handleRequest($request);
       

        if($form->isSubmitted() && $form->isValid()){
            
             $this->entityManager->persist($request->getSession()->get('trasfondo'));
             $this->entityManager->flush();
             $trasfondo = $this->entityManager->getRepository(Trasfondo::class)->FindLastID();
             $habilidades = $form->getData();
             $habilidades1 = new Habilidades();
             $habilidades2 = new Habilidades();
             $habilidades3 = new Habilidades();
             $habilidades4 = new Habilidades();
             $habilidades5 = new Habilidades();
           
             
            $habilidades1->setNombre($habilidades->getNombre());
            $habilidades1->setDescripcion($habilidades->getDescripcion());
            $habilidades1->setOrigenNivel($habilidades->getOrigenNivel());
            $habilidades1->setOrigenID('trasfondo_' . $trasfondo->getId());
            $habilidades1->setValidado(false);
            $habilidades1->setAutor($trasfondo->getAutor());

            $habilidades2->setNombre($habilidades->getNombre2());
            $habilidades2->setDescripcion($habilidades->getDescripcion2());
            $habilidades2->setOrigenNivel($habilidades->getOrigenNivel2());
            $habilidades2->setOrigenID('trasfondo_' . $trasfondo->getId());
            $habilidades2->setValidado(false);
            $habilidades2->setAutor($trasfondo->getAutor());

            $habilidades3->setNombre($habilidades->getNombre3());
            $habilidades3->setDescripcion($habilidades->getDescripcion3());
            $habilidades3->setOrigenNivel($habilidades->getOrigenNivel3());
            $habilidades3->setOrigenID('trasfondo_' . $trasfondo->getId());
            $habilidades3->setValidado(false);
            $habilidades3->setAutor($trasfondo->getAutor());

            $habilidades4->setNombre($habilidades->getNombre4());
            $habilidades4->setDescripcion($habilidades->getDescripcion4());
            $habilidades4->setOrigenNivel($habilidades->getOrigenNivel4());
            $habilidades4->setOrigenID('trasfondo_' . $trasfondo->getId());
            $habilidades4->setValidado(false);
            $habilidades4->setAutor($trasfondo->getAutor());

            $habilidades5->setNombre($habilidades->getNombre5());
            $habilidades5->setDescripcion($habilidades->getDescripcion5());
            $habilidades5->setOrigenNivel($habilidades->getOrigenNivel5());
            $habilidades5->setOrigenID('trasfondo_' . $trasfondo->getId());
            $habilidades5->setValidado(false);
            $habilidades5->setAutor($trasfondo->getAutor());

            
             $this->entityManager->persist($habilidades1); 
             $this->entityManager->persist($habilidades2);
             $this->entityManager->persist($habilidades3);
             $this->entityManager->persist($habilidades4);
             $this->entityManager->persist($habilidades5);
            // $this->entityManager->persist($habilidadesII);
            // $this->entityManager->persist($habilidadesIII);
            // $this->entityManager->persist($habilidadesIV);
            // $this->entityManager->persist($habilidadesV);
             $this->entityManager->flush();
            return $this->redirectToRoute('app_solicitud_ok');
        }
        return $this->render('solicitudes/habilidades_trasfondo.html.twig', [
            'form' => $form, 
        ]);
    }

    #[Route('/revisiones_trasfondos', name: 'app_revisiones_trasfondo')]
public function revisiones_trasfondos(): Response
{
    $revisiones = $this->entityManager->getRepository(Trasfondo::class)->FindNonValidated();
    return $this->render('revisiones/revisiones_trasfondo.html.twig', [
        'revisiones' => $revisiones,
    ]);
}

#[Route("/solicitud_trasfondo/{id}", name:"app_comprobar_trasfondo")]
public function trasfondook(Request $request, $id):Response
{
    $trasfondo = $this->entityManager->getRepository(Trasfondo::class)->find($id);
    $rasgos = $this->entityManager->getRepository(Habilidades::class)->findByOriginNonValidated('trasfondo',$id);
            
    return $this->render('buscador/mostrar/trasfondos.html.twig', [
        'trasfondo' => $trasfondo, 'rasgos' => $rasgos
    ]);
}

#[Route("/validar_trasfondo/{id}", name:"app_validar_trasfondo")]
public function validarTrasfondos($id)
{
$trasfondo = $this->entityManager->getRepository(Trasfondo::class)->find($id);

$habilidades = $this->entityManager->getRepository(Habilidades::class)->findByOriginNonValidated('trasfondo',$id);
foreach($habilidades as $h){
   $h->setValidado(1);
}
$trasfondo->setValidado(1);
$this->entityManager->flush();

return $this->redirectToRoute('app_revisiones_trasfondo');
}

#[Route("/eliminar_trasfondo/{id}", name:"app_eliminar_trasfondo")]
public function eliminarTrasfondo($id)
{
$trasfondo = $this->entityManager->getRepository(Trasfondo::class)->find($id);

$habilidades = $this->entityManager->getRepository(Habilidades::class)->findByOriginNonValidated('trasfondo',$id);
foreach($habilidades as $h){
    $this->entityManager->remove($h);
}
$this->entityManager->remove($trasfondo);
$this->entityManager->flush();

return $this->redirectToRoute('app_revisiones_trasfondo');
}


#[Route('/solicitud_dote', name: 'app_solicitud_dote')]
    public function Solicitudes_Dotes( Request $request):Response
	{
       
        
        $dote=new Dotes();
       
		$form = $this->createForm(DotesType2::Class,$dote);
        
            
		$form->handleRequest($request);
       
       
        
        if ($form->isSubmitted() && $form->isValid()) {
            $dotes = $form->getData();
            if ($dotes->getAutor() == null || strtolower($dotes->getAutor() )== 'clash of fates'){
                $dotes->setAutor('Anónimo');
            }

            if ($dotes->getImg() == null){
                $dotes->setImg('https://wallpaperaccess.com/full/1902223.png');
            }

            $dotes->setValidado(false);
            $sesion = $request->getSession();
            $sesion->set('dotes', $dotes);
            //$this->entityManager->persist($dotes);
            $this->entityManager->flush();
            return $this->redirectToRoute('app_solicitud_ok');
        }
        
		return $this->render( 'solicitudes/dotes.html.twig', array('form' => $form));
	}

    #[Route('/revisiones_dotes', name: 'app_revisiones_dote')]
public function revisiones_dotes(): Response
{
    $revisiones = $this->entityManager->getRepository(Dotes::class)->FindNonValidated();
    return $this->render('revisiones/revisiones_dote.html.twig', [
        'revisiones' => $revisiones,
    ]);
}



#[Route("/solicitud_dote/{id}", name:"app_comprobar_dote")]
public function doteok(Request $request, $id):Response
{
    $dote = $this->entityManager->getRepository(Dotes::class)->find($id);
            
    return $this->render('buscador/mostrar/dotes.html.twig', [
        'dote' => $dote
    ]);
}

#[Route("/validar_dote/{id}", name:"app_validar_dote")]
public function validarDotes($id)
{
$dote = $this->entityManager->getRepository(Dotes::class)->find($id);
$habilidades = $this->entityManager->getRepository(Habilidades::class)->findByOriginNonValidated('dotes',$id);
foreach($habilidades as $h){
   $h->setValidado(1);
}

$dote->setValidado(1);
$this->entityManager->flush();

return $this->redirectToRoute('app_revisiones_dote');
}

#[Route("/eliminar_dote/{id}", name:"app_eliminar_dote")]
public function eliminarDote($id)
{
$dote = $this->entityManager->getRepository(Dotes::class)->find($id);
$habilidades = $this->entityManager->getRepository(Habilidades::class)->findByOriginNonValidated('dotes',$id);
foreach($habilidades as $h){
    $this->entityManager->remove($h);
}

$this->entityManager->remove($dote);
$this->entityManager->flush();

return $this->redirectToRoute('app_revisiones_dote');
}


#[Route('/solicitud_hechizo', name: 'app_solicitud_hechizo')]
    public function Solicitudes_Hechizos( Request $request):Response
	{
       
        
        $hechizo=new Hechizos();
       
		$form = $this->createForm(HechizosType2::Class,$hechizo);
        
            
		$form->handleRequest($request);
       
       
        
        if ($form->isSubmitted() && $form->isValid()) {
            $hechizos = $form->getData();
            if ($hechizos->getAutor() == null || strtolower($hechizos->getAutor() )== 'clash of fates'){
                $hechizos->setAutor('Anónimo');
            }

            if ($hechizos->getImg() == null){
                $hechizos->setImg('https://wallpaperaccess.com/full/1902223.png');
            }

            $hechizos->setValidado(false);
            
            $this->entityManager->persist($hechizos);
            $this->entityManager->flush();
            return $this->redirectToRoute('app_solicitud_ok');
        }
        
		return $this->render( 'solicitudes/hechizos.html.twig', array('form' => $form));
	}

    #[Route('/revisiones_hechizos', name: 'app_revisiones_hechizo')]
public function revisiones_hechizos(): Response
{
    $revisiones = $this->entityManager->getRepository(Hechizos::class)->FindNonValidated();
    return $this->render('revisiones/revisiones_hechizo.html.twig', [
        'revisiones' => $revisiones,
    ]);
}

#[Route("/solicitud_hechizo/{id}", name:"app_comprobar_hechizo")]
public function hechizook(Request $request, $id):Response
{
    $hechizo = $this->entityManager->getRepository(Hechizos::class)->find($id);
            
    return $this->render('buscador/mostrar/hechizos.html.twig', [
        'hechizo' => $hechizo
    ]);
}

#[Route("/validar_hechizo/{id}", name:"app_validar_hechizo")]
public function validarHechizos($id)
{
$subraza = $this->entityManager->getRepository(Subrazas::class)->find($id);


$subraza->setValidado(1);
$this->entityManager->flush();

return $this->redirectToRoute('app_revisiones_hechizo');
}

#[Route("/eliminar_hechizos/{id}", name:"app_eliminar_hechizo")]
public function eliminarHechizo($id)
{
$hechizo = $this->entityManager->getRepository(Hechizos::class)->find($id);


$this->entityManager->remove($hechizo);
$this->entityManager->flush();

return $this->redirectToRoute('app_revisiones_hechizo');
}







private function copyright($autor){
    if($autor == null 
            || strtolower($autor )== 'clash of fates'
            || strtolower($autor )== 'clash of feits'
            || strtolower($autor )== 'clas of fates'
            || strtolower($autor )== 'clas of feits'
            || strtolower($autor )== 'klash of fates'
            || strtolower($autor )== 'Klas of fates'
            || strtolower($autor )== 'klash of feits'
            || strtolower($autor )== 'Klas of feits'
            || strtolower($autor )== 'wizards of the coast'){
        return true;
    }
    else{
        return false;
    }
     
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

