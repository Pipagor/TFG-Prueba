<?php

namespace App\Repository;

use App\Entity\Habilidades;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Habilidades>
 *
 * @method Habilidades|null find($id, $lockMode = null, $lockVersion = null)
 * @method Habilidades|null findOneBy(array $criteria, array $orderBy = null)
 * @method Habilidades[]    findAll()
 * @method Habilidades[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HabilidadesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Habilidades::class);
    }

    public function findByOrigin($origen, $id){
        return $this->createQueryBuilder('a')
        ->select('a')
        ->andWhere('a.Origen_ID = ?1')
        ->andWhere('a.Validado = 1')
        ->setParameter(1, $origen . '_'. $id)
        ->getQuery()
        ->getResult();
    }

    public function findByOriginNonValidated($origen, $id){
        return $this->createQueryBuilder('a')
        ->select('a')
        ->andWhere('a.Origen_ID = ?1')
        ->setParameter(1, $origen . '_'. $id)
        ->getQuery()
        ->getResult();
    }

    

    

    

    //    /**
    //     * @return Habilidades[] Returns an array of Habilidades objects
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

    //    public function findOneBySomeField($value): ?Habilidades
    //    {
    //        return $this->createQueryBuilder('h')
    //            ->andWhere('h.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
