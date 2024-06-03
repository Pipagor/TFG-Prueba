<?php

namespace App\Repository;

use App\Entity\Trasfondo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Trasfondo>
 *
 * @method Trasfondo|null find($id, $lockMode = null, $lockVersion = null)
 * @method Trasfondo|null findOneBy(array $criteria, array $orderBy = null)
 * @method Trasfondo[]    findAll()
 * @method Trasfondo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrasfondoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Trasfondo::class);
    }

    public function FindUniqueAutores(){
        return $this->createQueryBuilder('a')
        ->select('a.Autor')
        ->andWhere('a.Autor IS NOT NULL')
        ->andWhere('a.Validado = 1')
        ->groupBy('a.Autor')
        ->getQuery()
        ->getResult();
    }

    public function FindNonValidated(){
        return $this->createQueryBuilder('a')
        ->select('a')
        ->andWhere('a.Validado = 0')
        ->getQuery()
        ->getResult();
    }

    public function FindNonValidatedById($id){
        return $this->createQueryBuilder('a')
        ->select('a')
        ->andWhere('a.Validado = 0')
        ->andWhere('a.id = :id')
        ->setParameter('id', $id)
        ->getQuery()
        ->getOneOrNullResult();
    }

    public function FindValidatedById($id){
        return $this->createQueryBuilder('a')
        ->select('a')
        ->andWhere('a.Validado = 1')
        ->andWhere('a.id = :id')
        ->setParameter('id', $id)
        ->getQuery()
        ->getOneOrNullResult();
    }

    public function findAllOrigen($origen){
        return $this->createQueryBuilder('a')
        ->select('a')
        ->andWhere('a.Validado = 1')
        ->andWhere('a.Origen = :origen')
        ->setParameter('origen', $origen)
        ->getQuery()
        ->getResult();
    }

    public function FindLastID(){
        return $this->createQueryBuilder('a')
        ->select('a')
        ->orderBy('a.id', 'DESC')
        ->setMaxResults(1)
        ->getQuery()
        ->getOneOrNullResult();
    }

    public function FindAllValidated(){
        return $this->createQueryBuilder('a')
        ->select('a')
        ->andWhere('a.Validado = 1')
        ->getQuery()
        ->getResult();
    }
    
    public function FindFilter(Trasfondo $formulario){
       $qb = $this->createQueryBuilder('a')
                  ->select('a');


               
        if ($formulario->getNombre() != null){
            $qb = $qb->andWhere('a.Nombre LIKE :nombre')
            ->setParameter('nombre' , '%' .  $formulario->getNombre() . '%');
        }
        
        if ($formulario->getDescripcion() != null){
            $qb = $qb->andWhere('a.Descripcion LIKE :descripcion')
               ->setParameter('descripcion' , '%' .  $formulario->getDescripcion() . '%');
        }

       if ($formulario->getOrigen() != null){
            $qb = $qb->andWhere('a.Origen = :origen')
               ->setParameter('origen' , $formulario->getOrigen());
        }

        if ($formulario->getIdiomas() != null){
            $qb = $qb->andWhere('a.Idiomas LIKE :idiomas')
               ->setParameter('idiomas' , '%' . $formulario->getIdiomas() . '%' );
               
        } 

        if ($formulario->getObjetosIniciales() != null){
            $qb = $qb->andWhere('a.ObjetosIniciales LIKE :objetos_iniciales')
               ->setParameter('objetos_iniciales', '%' .  $formulario->getObjetosIniciales() . '%');
        }
        
        if ($formulario->getCompetencias() != null){
            $qb = $qb->andWhere('a.Competencias = :competencias')
               ->setParameter('competencias' ,  $formulario->getCompetencias() );
        }

        
        if ($formulario->getAutor() != null){
            $qb = $qb->andWhere('a.Autor = :autor')
               ->setParameter('autor' ,  $formulario->getAutor()  );
               
        } 

        if ($formulario->getPlano() != null){
            $qb = $qb->andWhere('a.Plano = :plano')
               ->setParameter('plano' ,  $formulario->getPlano() );
        }
           
       $qb = $qb->andWhere('a.Validado = 1')
        ->getQuery()
        ->getResult();
        return $qb;
       
       
        
    }

    //    /**
    //     * @return Trasfondo[] Returns an array of Trasfondo objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('t')
    //            ->andWhere('t.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('t.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Trasfondo
    //    {
    //        return $this->createQueryBuilder('t')
    //            ->andWhere('t.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
