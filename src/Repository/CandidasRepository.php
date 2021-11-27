<?php

namespace App\Repository;

use App\Entity\Candidas;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Candidas|null find($id, $lockMode = null, $lockVersion = null)
 * @method Candidas|null findOneBy(array $criteria, array $orderBy = null)
 * @method Candidas[]    findAll()
 * @method Candidas[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CandidasRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Candidas::class);
    }

    // /**
    //  * @return Candidas[] Returns an array of Candidas objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Candidas
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
