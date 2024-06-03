<?php

namespace App\Repository;

use App\Entity\Hechizos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Hechizos>
 *
 * @method Hechizos|null find($id, $lockMode = null, $lockVersion = null)
 * @method Hechizos|null findOneBy(array $criteria, array $orderBy = null)
 * @method Hechizos[]    findAll()
 * @method Hechizos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HechizosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Hechizos::class);
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
    
    public function FindFilter(Hechizos $formulario){
       $qb = $this->createQueryBuilder('a')
                  ->select('a');


               
        if ($formulario->getNombre() != null){
            $qb = $qb->andWhere('a.Nombre LIKE :nombre')
            ->setParameter('nombre' , '%' .  $formulario->getNombre() . '%');
        }
        
        if ($formulario->getNivel() != null){
            $qb = $qb->andWhere('a.Nivel = :nivel')
               ->setParameter('nivel' ,  $formulario->getNivel());
        }
        

       if ($formulario->getEscuela() != null){
            $qb = $qb->andWhere('a.Escuela LIKE :escuela')
               ->setParameter('escuela' , '%' .  $formulario->getEscuela() . '%');
        }

        if ($formulario->getTiempoDeEjecucion() != null){
            $qb = $qb->andWhere('a.TiempoDeEjecucion LIKE :tiempoDeEjecucion')
               ->setParameter('tiempoDeEjecucion' , '%' .  $formulario->getTiempoDeEjecucion() . '%');
        }

        if ($formulario->getRango() != null){
            $qb = $qb->andWhere('a.Rango LIKE :rango')
               ->setParameter('rango' , '%' .  $formulario->getRango() . '%');
        }

        if ($formulario->getComponentes() != null){
            $qb = $qb->andWhere('a.Componentes LIKE :componentes')
               ->setParameter('componentes' , '%' .  $formulario->getComponentes() . '%');
        }

        if ($formulario->getDuracion() != null){
            $qb = $qb->andWhere('a.Duracion LIKE :duracion')
               ->setParameter('duracion' , '%' .  $formulario->getDuracion() . '%');
        }

        if ($formulario->getZonaEfecto() != null){
            $qb = $qb->andWhere('a.Zona_Efecto LIKE :zonaEfecto')
               ->setParameter('zonaEfecto' , '%' .  $formulario->getZonaEfecto() . '%');
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
    //     * @return Hechizos[] Returns an array of Hechizos objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('h')
    //            ->andWhere('h.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('h.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Hechizos
    //    {
    //        return $this->createQueryBuilder('h')
    //            ->andWhere('h.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
