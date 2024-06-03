<?php

namespace App\Repository;

use App\Entity\Pactos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Pactos>
 *
 * @method Pactos|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pactos|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pactos[]    findAll()
 * @method Pactos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PactosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Pactos::class);
    }

    //    /**
    //     * @return Pactos[] Returns an array of Pactos objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('p.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Pactos
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
