<?php

namespace App\Repository;

use App\Entity\Razas;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Razas>
 *
 * @method Razas|null find($id, $lockMode = null, $lockVersion = null)
 * @method Razas|null findOneBy(array $criteria, array $orderBy = null)
 * @method Razas[]    findAll()
 * @method Razas[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RazasRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Razas::class);
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

    public function FindAllValidated(){
        return $this->createQueryBuilder('a')
        ->select('a')
        ->andWhere('a.Validado = 1')
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

    public function FindRazas(){
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
        ->getOneOrNullResult();
    }


    public function FindFilter(Razas $formulario){
        $qb = $this->createQueryBuilder('a')
                   ->select('a');
 
 
                
         if ($formulario->getNombre() != null){
             $qb = $qb->andWhere('a.Nombre LIKE :nombre')
             ->setParameter('nombre' , '%' .  $formulario->getNombre() . '%');
         }
         
         if ($formulario->getFuerza() != null){
             $qb = $qb->andWhere('a.Fuerza LIKE :fuerza')
                ->setParameter('fuerza' , '%' .  $formulario->getFuerza() . '%');
         }
 
        if ($formulario->getDestreza() != null){
             $qb = $qb->andWhere('a.Destreza LIKE :destreza')
                ->setParameter('destreza' , '%' .  $formulario->getDestreza() . '%');
         }
 
         if ($formulario->getConstitucion() != null){
             $qb = $qb->andWhere('a.Constitucion = :constitucion')
                ->setParameter('constitucion' ,  $formulario->getConstitucion());
                
         } 
 
         if ($formulario->getInteligencia() != null){
             $qb = $qb->andWhere('a.Inteligencia LIKE :inteligencia')
                ->setParameter('inteligencia', '%' .  $formulario->getInteligencia() . '%');
         }
         
            if ($formulario->getSabiduria() != null){
             $qb = $qb->andWhere('a.Sabiduria = :sabiduria')
                ->setParameter('sabiduria' ,  $formulario->getSabiduria() );
         }

            if ($formulario->getCarisma() != null){
                $qb = $qb->andWhere('a.Carisma = :carisma')
                    ->setParameter('carisma' ,  $formulario->getCarisma()  );
            }
         
            if ($formulario->getAutor() != null){
             $qb = $qb->andWhere('a.Autor = :autor')
                ->setParameter('autor' ,  $formulario->getAutor()  );
                
         }
         
            if ($formulario->getVelocidad() != null){
                $qb = $qb->andWhere('a.Velocidad LIKE :velocidad')
                    ->setParameter('velocidad' , '%' .  $formulario->getVelocidad() . '%');
            }

            if ($formulario->getAtaqueDesarmado() != null){
                $qb = $qb->andWhere('a.AtaqueDesarmado LIKE :ataquedesarmado')
                    ->setParameter('ataquedesarmado' , '%' .  $formulario->getAtaqueDesarmado() . '%');
            }
            
        $qb = $qb->andWhere('a.Validado = 1')
         ->getQuery()
         ->getResult();
         return $qb;
        
        
         
     }

    //    /**
    //     * @return Razas[] Returns an array of Razas objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('r.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Razas
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
