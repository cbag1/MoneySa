<?php

namespace App\Repository;

use App\Entity\ClientAgence;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ClientAgence|null find($id, $lockMode = null, $lockVersion = null)
 * @method ClientAgence|null findOneBy(array $criteria, array $orderBy = null)
 * @method ClientAgence[]    findAll()
 * @method ClientAgence[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClientAgenceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ClientAgence::class);
    }

    // /**
    //  * @return ClientAgence[] Returns an array of ClientAgence objects
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
    public function findOneBySomeField($value): ?ClientAgence
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
