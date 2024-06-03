<?php

namespace App\Repository;

use App\Entity\Clases;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Clases>
 *
 * @method Clases|null find($id, $lockMode = null, $lockVersion = null)
 * @method Clases|null findOneBy(array $criteria, array $orderBy = null)
 * @method Clases[]    findAll()
 * @method Clases[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClasesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Clases::class);
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

    public function FindAllValidated(){
        return $this->createQueryBuilder('a')
        ->select('a')
        ->andWhere('a.Validado = 1')
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

    public function FindClases(){
        return $this->createQueryBuilder('a')
        ->select('a.Nombre')
        ->andWhere('a.Validado = 1')
        ->groupBy('a.Nombre')
        ->orderBy('a.id', 'ASC')
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

    public function FindImg($id){
        return $this->createQueryBuilder('a')
        ->select('a.img')
        ->andWhere('a.id = :id')
        ->setParameter('id', $id)
        ->getQuery()
        ->getSingleScalarResult();
    }

   
    
    public function FindFilter(Clases $formulario){
       $qb = $this->createQueryBuilder('a')
                  ->select('a');


               
        if ($formulario->getNombre() != null){
            $qb = $qb->andWhere('a.Nombre LIKE :nombre')
            ->setParameter('nombre' , '%' .  $formulario->getNombre() . '%');
        }
        
        if ($formulario->getRequisitos() != null){
            $qb = $qb->andWhere('a.Requisitos LIKE :requisitos')
               ->setParameter('requisitos' , '%' .  $formulario->getRequisitos() . '%');
        }

       if ($formulario->getCompetencias() != null){
            $qb = $qb->andWhere('a.Competencias LIKE :competencias')
               ->setParameter('competencias' , '%' .  $formulario->getCompetencias() . '%');
        }

        if ($formulario->getMagia() != null){
            $qb = $qb->andWhere('a.Magia = :magia')
               ->setParameter('magia' ,  $formulario->getMagia()  );
               
        } 

        if ($formulario->getSalvaciones() != null){
            $qb = $qb->andWhere('a.Salvaciones LIKE :salvaciones')
               ->setParameter('salvaciones', '%' .  $formulario->getSalvaciones() . '%');
        }
        
        if ($formulario->getPuntosDeGolpe() != null){
            $qb = $qb->andWhere('a.PuntosDeGolpe = :puntos')
               ->setParameter('puntos' ,  $formulario->getPuntosDeGolpe() );
        }
        
        if ($formulario->getAutor() != null){
            $qb = $qb->andWhere('a.Autor = :autor')
               ->setParameter('autor' ,  $formulario->getAutor()  );
               
        } 
           
       $qb = $qb->andWhere('a.Validado = 1')
        ->getQuery()
        ->getResult();
        return $qb;
       
       
        
    }

    //    /**
    //     * @return Clases[] Returns an array of Clases objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('c.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Clases
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
