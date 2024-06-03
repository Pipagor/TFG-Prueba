<?php

namespace App\Repository;

use App\Entity\ListaHechizos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ListaHechizos>
 *
 * @method ListaHechizos|null find($id, $lockMode = null, $lockVersion = null)
 * @method ListaHechizos|null findOneBy(array $criteria, array $orderBy = null)
 * @method ListaHechizos[]    findAll()
 * @method ListaHechizos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ListaHechizosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ListaHechizos::class);
    }

    //    /**
    //     * @return ListaHechizos[] Returns an array of ListaHechizos objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('l')
    //            ->andWhere('l.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('l.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?ListaHechizos
    //    {
    //        return $this->createQueryBuilder('l')
    //            ->andWhere('l.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
