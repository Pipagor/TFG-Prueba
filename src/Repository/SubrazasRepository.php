<?php

namespace App\Repository;

use App\Entity\Subrazas;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Subrazas>
 *
 * @method Subrazas|null find($id, $lockMode = null, $lockVersion = null)
 * @method Subrazas|null findOneBy(array $criteria, array $orderBy = null)
 * @method Subrazas[]    findAll()
 * @method Subrazas[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SubrazasRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Subrazas::class);
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

    public function FindLastID(){
        return $this->createQueryBuilder('a')
        ->select('a')
        ->orderBy('a.id', 'DESC')
        ->setMaxResults(1)
        ->getQuery()
        ->getOneOrNullResult();
    }

    public function FindRazaById($id){
        return $this->createQueryBuilder('a')
        ->select('a')
        ->andWhere('a.Validado = 1')
        ->andWhere('a.raza_id = :id')
        ->setParameter('id', $id)
        ->getQuery()
        ->getResult();
    }

    
    
    public function FindFilter(Subrazas $formulario){
       $qb = $this->createQueryBuilder('a')
                  ->select('a');


               
        if ($formulario->getNombre() != null){
            $qb = $qb->andWhere('a.Nombre LIKE :nombre')
            ->setParameter('nombre' , '%' .  $formulario->getNombre() . '%');
        }
        
        if ($formulario->getFuerza() != null){
            $qb = $qb->andWhere('a.Fuerza = :fuerza')
               ->setParameter('fuerza' ,  $formulario->getFuerza());
        }

        if ($formulario->getDestreza() != null){
            $qb = $qb->andWhere('a.Destreza = :destreza')
               ->setParameter('destreza' ,   $formulario->getDestreza());
        }

        if ($formulario->getConstitucion() != null){
            $qb = $qb->andWhere('a.Constitucion = :constitucion')
               ->setParameter('constitucion' ,   $formulario->getConstitucion());
        }

        if ($formulario->getInteligencia() != null){
            $qb = $qb->andWhere('a.Inteligencia = :inteligencia')
               ->setParameter('inteligencia' ,  $formulario->getInteligencia());
        }

        if ($formulario->getSabiduria() != null){
            $qb = $qb->andWhere('a.Sabiduria = :sabiduria')
               ->setParameter('sabiduria' ,  $formulario->getSabiduria());
        }

        if ($formulario->getCarisma() != null){
            $qb = $qb->andWhere('a.Carisma = :carisma')
               ->setParameter('carisma' ,   $formulario->getCarisma());
        }



       if ($formulario->getRazaId() != null){
            $qb = $qb->andWhere('a.raza_id = :raza')
               ->setParameter('raza' ,   $formulario->getRazaId());
        }

        if ($formulario->getAtaqueDesarmado() != null){
            $qb = $qb->andWhere('a.AtaqueDesarmado = :ataque')
               ->setParameter('ataque' ,   $formulario->getAtaqueDesarmado());
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
    //     * @return Subrazas[] Returns an array of Subrazas objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('s')
    //            ->andWhere('s.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('s.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Subrazas
    //    {
    //        return $this->createQueryBuilder('s')
    //            ->andWhere('s.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
